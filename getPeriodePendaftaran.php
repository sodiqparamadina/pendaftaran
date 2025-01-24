<?php
            require 'config.php';

            $id_sistem_kuliah = isset($_POST['id_sistem_kuliah']) ? $_POST['id_sistem_kuliah'] : '';
            $id_jalur_pendaftaran = isset($_POST['id_jalur_pendaftaran']) ? $_POST['id_jalur_pendaftaran'] : '';
            $id_periode_akademik = isset($_POST['id_periode_akademik']) ? $_POST['id_periode_akademik'] : '';            
            
              // Contoh query
              $sql = "
              select * from periode_pendaftaran
              WHERE id_sistem_kuliah = $id_sistem_kuliah
              AND id_jalur_pendaftaran = $id_jalur_pendaftaran
              AND periode_akademik = $periode_akademik
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