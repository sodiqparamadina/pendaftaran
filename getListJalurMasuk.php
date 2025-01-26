<?php
            require 'config.php';
            
              $jenjang = isset($_POST['jenjang']) ? $_POST['jenjang'] : '';
              // Contoh query
              $sql = "
                SELECT id_jalur_pendaftaran, nama_jalur_pendaftaran FROM
                jalur_masuks
                WHERE is_used = '1'
                AND jenjang = '$jenjang'
              ";
              $result = mysqli_query($conn, $sql);
                // Jika query berhasil
                if ($result) {
                    // Ambil semua hasil sebagai array multidimensi
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    // Cetak hasil
                    echo json_encode($rows); // Mengembalikan dalam format JSON jika ingin digunakan di JavaScript
                } else {
                    // Jika query gagal
                    echo "Query Error: " . mysqli_error($conn);
                }
               mysqli_close($conn);
            ?>