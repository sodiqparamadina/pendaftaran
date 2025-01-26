<?php
            require 'config.php';
            
            $jenjang = isset($_POST['jenjang']) ? $_POST['jenjang'] : '';
              // Contoh query
              $sql = "
                select id_program_studi, program_studi
                from program_studi_dibukas
                where jenjang_program_studi = '$jenjang'
                group by id_program_studi
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