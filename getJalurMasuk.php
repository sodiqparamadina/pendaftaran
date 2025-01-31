<?php
            require 'config.php';
            
              $jenjang = isset($_POST['jenjang']) ? $_POST['jenjang'] : '';
              $id_prodi = isset($_POST['id_prodi']) ? $_POST['id_prodi'] : '';
              $lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : '';
              $periode_pendaftaran = isset($_POST['periode_pendaftaran']) ? $_POST['periode_pendaftaran'] : '';
              $nama_periode_pendaftaran = isset($_POST['namaperiodePendaftaran']) ? $_POST['namaperiodePendaftaran'] : '';
              $now = date('Y-m-d');
              // $getNamePeriode = "SELECT * FROM program_studi_dibukas where id_periode_pendaftaran = $periode_pendaftaran";
              $sql = "
               
                            select a.*, SUBSTRING_INDEX(SUBSTRING_INDEX(a.sistem_kuliah, '(', -1), ')', 1) AS lokasi  
            from program_studi_dibukas a
            JOIN 
              periode_pendaftaran b 
              ON b.id_sevima = a.id_periode_pendaftaran 
            where a.jenjang_program_studi = '$jenjang' 
            AND a.id_program_studi = $id_prodi
            AND a.nama_periode_pendaftaran LIKE '%$periode_pendaftaran%'
            AND b.tanggal_akhir_pendaftaran >= '$now'
            AND a.sistem_kuliah LIKE '%$lokasi%'
                          
              ";
              //and id_periode_pendaftaran = $periode_pendaftaran
              // var_dump($sql);die();
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