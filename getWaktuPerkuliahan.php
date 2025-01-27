<?php
            require 'config.php';
            
            $jenjang = isset($_POST['jenjang']) ? mysqli_real_escape_string($conn, $_POST['jenjang']) : '';
            $id_prodi = isset($_POST['id_prodi']) ? intval($_POST['id_prodi']) : 0;
            $lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : '';
              // Contoh query
             
              $sql = "
                select *
                from program_studi_dibukas 
                where program_studi_dibukas.jenjang_program_studi like '%$jenjang%'
                and program_studi_dibukas.id_program_studi = $id_prodi
                and program_studi_dibukas.sistem_kuliah like '%$lokasi%'
                group by program_studi_dibukas.nama_periode_pendaftaran order by program_studi_dibukas.nama_periode_pendaftaran ASC
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