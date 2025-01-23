<?php
            require 'config.php';

            $jenjang = isset($_POST['jenjang']) ? $_POST['jenjang'] : '';

              // Contoh query
              $sql = "
                select * from program_studi_dibukas
                where jenjang_program_studi = '$jenjang'
                and id_program_studi = 70201
                and sistem_kuliah like '%(Cipayung) S1 Kelas A%'
                and id_jalur_pendaftaran = 10
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