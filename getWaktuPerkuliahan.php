<?php
            require 'config.php';
            
            $jenjang = isset($_POST['jenjang']) ? mysqli_real_escape_string($conn, $_POST['jenjang']) : '';
            $id_prodi = isset($_POST['id_prodi']) ? intval($_POST['id_prodi']) : 0;
            $lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : '';
            $now = date('Y-m-d');
              $sql = "
                select *
                from program_studi_dibukas a
                 JOIN 
                  periode_pendaftaran b 
                  ON b.id_sevima = a.id_periode_pendaftaran 
                where a.jenjang_program_studi like '%$jenjang%'
                and a.id_program_studi = $id_prodi
                and a.sistem_kuliah like '%$lokasi%'
                  AND b.tanggal_akhir_pendaftaran >= '$now'
                group by a.nama_periode_pendaftaran order by a.nama_periode_pendaftaran ASC
              ";
              // var_dump($sql);
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