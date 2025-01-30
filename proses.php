<?php
            require 'config.php';

            $lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : '';
            $jenjang = isset($_POST['jenjang']) ? mysqli_real_escape_string($conn, $_POST['jenjang']) : '';
            $id_prodi = isset($_POST['id_prodi']) ? intval($_POST['id_prodi']) : 0;
            $id_jalur_pendaftaran = isset($_POST['id_jalur_pendaftaran']) ? $_POST['id_jalur_pendaftaran'] : '';
            $nama_periode_pendaftaran = isset($_POST['nama_periode_pendaftaran']) ? $_POST['nama_periode_pendaftaran'] : '';
            
              $sql = "
              SELECT 
                      psd.*, 
                      pp.tanggal_awal_pendaftaran, 
                      pp.tanggal_akhir_pendaftaran,
                      pp.keterangan
                  FROM program_studi_dibukas psd
                  JOIN periode_pendaftaran pp ON psd.id_periode_pendaftaran = pp.id
                  WHERE psd.jenjang_program_studi = '$jenjang'
                  AND psd.id_program_studi = '$id_prodi'
                  AND psd.sistem_kuliah LIKE '%$lokasi%'
                  AND psd.id_jalur_pendaftaran = '$id_jalur_pendaftaran'
                  AND psd.nama_periode_pendaftaran = '$nama_periode_pendaftaran'
              ";
            //   AND psd.id_periode_pendaftaran = $nama_periode_pendaftaran
            //   var_dump($sql);die();
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