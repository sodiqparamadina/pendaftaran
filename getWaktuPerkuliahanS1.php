<?php
            require 'config.php';
            
            $jenjang = isset($_POST['jenjang']) ? mysqli_real_escape_string($conn, $_POST['jenjang']) : '';
            $id_prodi = isset($_POST['id_prodi']) ? intval($_POST['id_prodi']) : 0;
            $lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : '';
            $jenis_pendaftaran = isset($_POST['jenis_pendaftaran']) ? $_POST['jenis_pendaftaran'] : '';
            $id_gelombang = isset($_POST['id_gelombang']) ? $_POST['id_gelombang'] : '';
            $now = date('Y-m-d');

            if ($jenis_pendaftaran === 'Jalur SMA/SMK') {
              $sql_jenis_pendaftaran = "and psd.jalur_pendaftaran != 'Alih Jenjang (D3 ke S1)' and psd.jalur_pendaftaran != 'Pindahan'";
            } else {
              $sql_jenis_pendaftaran = "and psd.jalur_pendaftaran = '$jenis_pendaftaran'";
            }
              // Contoh query
             
              $sql = "
                select *
                from program_studi_dibukas psd
                join periode_pendaftaran pp on pp.id_sevima = psd.id_periode_pendaftaran
                where psd.jenjang_program_studi like '%$jenjang%'
                and psd.id_program_studi = $id_prodi
                and psd.sistem_kuliah like '%$lokasi%'
                and pp.tanggal_akhir_pendaftaran >= '$now'
                $sql_jenis_pendaftaran
                group by psd.nama_periode_pendaftaran
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