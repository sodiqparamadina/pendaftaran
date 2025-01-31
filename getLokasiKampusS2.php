<?php
            require 'config.php';
            
              $jenjang = isset($_POST['jenjang']) ? $_POST['jenjang'] : '';
              $id_prodi = isset($_POST['id_prodi']) ? $_POST['id_prodi'] : '';
              // Contoh query
              $sql = "
               
                
                select SUBSTRING_INDEX(SUBSTRING_INDEX(a.sistem_kuliah, '(', -1), ')', 1) AS lokasi  from program_studi_dibukas a
                JOIN 
                  periode_pendaftaran b 
                  ON b.id_sevima = a.id_periode_pendaftaran 
                where a.jenjang_program_studi = '$jenjang' 
                AND a.id_program_studi = $id_prodi
                AND b.tanggal_akhir_pendaftaran <= NOW()
                GROUP BY lokasi
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