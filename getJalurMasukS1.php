<?php
            require 'config.php';
            
              $jenjang = isset($_POST['jenjang']) ? $_POST['jenjang'] : '';
              $id_prodi = isset($_POST['id_prodi']) ? $_POST['id_prodi'] : '';
              $lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : '';
              $periode_pendaftaran = isset($_POST['periode_pendaftaran']) ? $_POST['periode_pendaftaran'] : '';
              $jenis_pendaftaran = isset($_POST['jenis_pendaftaran']) ? $_POST['jenis_pendaftaran'] : '';
              $gelombang = isset($_POST['gelombang']) ? $_POST['gelombang'] : '';

              if ($jenis_pendaftaran === 'Pindahan') {
                $sql_jenis_pendaftaran = "and program_studi_dibukas.jalur_pendaftaran = 'Pindahan'";
              } else if ($jenis_pendaftaran === "Alih Jenjang (D3 ke S1)") {
                $sql_jenis_pendaftaran = "and program_studi_dibukas.jalur_pendaftaran = 'Alih Jenjang (D3 ke S1)'";
              } else {
                $sql_jenis_pendaftaran = "and program_studi_dibukas.jalur_pendaftaran != 'Pindahan' and program_studi_dibukas.jalur_pendaftaran != 'Alih Jenjang (D3 ke S1)'";
              }
             
              $sql = "
                select *
                from program_studi_dibukas
                where jenjang_program_studi = '$jenjang'
                and id_program_studi = $id_prodi
                and sistem_kuliah LIKE '%$lokasi%'
                and nama_periode_pendaftaran like '%$periode_pendaftaran%'
                and id_gelombang = $gelombang
                $sql_jenis_pendaftaran
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