<?php
            require 'config.php';

            $lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : '';
            $jenjang = isset($_POST['jenjang']) ? mysqli_real_escape_string($conn, $_POST['jenjang']) : '';
            $id_prodi = isset($_POST['id_prodi']) ? intval($_POST['id_prodi']) : 0;
            $id_jalur_pendaftaran = isset($_POST['id_jalur_pendaftaran']) ? $_POST['id_jalur_pendaftaran'] : '';
            $nama_periode_pendaftaran = isset($_POST['nama_periode_pendaftaran']) ? $_POST['nama_periode_pendaftaran'] : '';
            // var_dump('haloo',$nama_periode_pendaftaran);
            $now = date('Y-m-d');
              $sql = "
                   select *  
            from program_studi_dibukas a
            JOIN 
              periode_pendaftaran b 
              ON b.id_sevima = a.id_periode_pendaftaran 
            where a.jenjang_program_studi = '$jenjang' 
            AND a.id_program_studi = $id_prodi
            AND a.nama_periode_pendaftaran LIKE '%$nama_periode_pendaftaran%'
            AND b.tanggal_akhir_pendaftaran >= '$now'
            AND a.sistem_kuliah LIKE '%$lokasi%'
            AND a.id_jalur_pendaftaran = '$id_jalur_pendaftaran'
              ";
            //   AND psd.id_periode_pendaftaran = $nama_periode_pendaftaran
              // var_dump($sql);die();
              // $result = mysqli_query($conn, $sql);
              //   // Jika query berhasil
              //   if ($result) {
              //       // Ambil semua hasil sebagai array multidimensi
              //       $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
              //       $selecteds = [];

              //       for ($i=0; $i < count($rows); $i++) { 
              //         if($rows[$i]['nama_periode_pendaftaran'] == $nama_periode_pendaftaran){
              //           $selecteds[0] = $rows[$i];
              //         }
              //         $rows[$i]['active_name'] = $nama_periode_pendaftaran;
              //       }

              //       // Cetak hasil
              //       echo json_encode($selecteds); // Mengembalikan dalam format JSON jika ingin digunakan di JavaScript
              //   } else {
              //       // Jika query gagal
              //       echo "Query Error: " . mysqli_error($conn);
              //   }
              //  mysqli_close($conn);

              $result = mysqli_query($conn, $sql);
                // Jika query berhasil
                if ($result) {
                    // Ambil semua hasil sebagai array multidimensi
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                  // var_dump($rows);
                    // Cetak hasil
                    echo json_encode($rows); // Mengembalikan dalam format JSON jika ingin digunakan di JavaScript
                } else {
                    // Jika query gagal
                    echo "Query Error: " . mysqli_error($conn);
                }
               mysqli_close($conn);
            ?>