<?php
            require 'config.php';

            $lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : '';
            $jenjang = isset($_POST['jenjang']) ? $_POST['jenjang'] : '';
            $id_prodi = isset($_POST['id_prodi']) ? $_POST['id_prodi'] : '';
            $id_sistem_kuliah = isset($_POST['id_sistem_kuliah']) ? $_POST['id_sistem_kuliah'] : '';
            $id_jalur_pendaftaran = isset($_POST['id_jalur_pendaftaran']) ? $_POST['id_jalur_pendaftaran'] : '';
            $prodi = isset($_POST['prodi']) ? $_POST['prodi'] : '';
            
            if (strtolower($prodi) == "teknik informatika") {
              $id_prodi = 55201;
            } else if (strtolower($prodi) == "manajemen") {
              $id_prodi = 61201;
            } else if (strtolower($prodi) == "ilmu komunikasi") {
              $id_prodi = 70201;
            } else if (strtolower($prodi) == "hubungan internasional") {
              $id_prodi = 64201;
            } else if (strtolower($prodi) == "falsafah dan agama") {
              $id_prodi = 76237;
            } else if (strtolower($prodi) == "psikologi") {
              $id_prodi = 73201;
            } else if (strtolower($prodi) == "desain komunikasi visual") {
              $id_prodi = 90241;
            } else if (strtolower($prodi) == "desain produk") {
              $id_prodi = 90231;
            } else {
              $id_prodi = 0;
            }
            
              // Contoh query
              $sql = "
                select * from program_studi_dibukas
                where jenjang_program_studi = '$jenjang'
                and id_program_studi = $id_prodi
                and id_sistem_kuliah = $id_sistem_kuliah
                and id_jalur_pendaftaran = $id_jalur_pendaftaran
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