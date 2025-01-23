<?php 

if($_GET['dev']){

}else{
  header("Location: https://paramadina.siakadcloud.com/spmbfront/home");
}

?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Pendaftaran</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <div class="header-container">
      <header class="main-header">
        <div class="header-wrapper">
          <div class="nav-content">
            <div class="logo-section">
              <img src="images/logo.jpg" alt="Logo" class="logo-img" />
              <div class="university-name">
                <span class="admission-text">Penerimaan Mahasiswa Baru</span>
                <span class="uni-text">Universitas Paramadina</span>
              </div>
            </div>

            <nav class="main-nav">
              <a href="#" class="nav-link">Beranda</a>
              <a href="#" class="nav-link">Jalur Pendaftaran</a>
              <div class="dropdown">
                <a href="#" class="nav-link">
                  Informasi
                  <svg
                    style="display: inline; width: 16px; height: 16px"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 9l-7 7-7-7"
                    />
                  </svg>
                </a>
              </div>
            </nav>

            <div class="login-section">
              <a href="https://paramadina.siakadcloud.com/spmbfront/login" class="login-button">Masuk</a>
            </div>
          </div>
        </div>
      </header>
    </div>
    <div class="hero-section">
      <div class="hero-content">
        <h1 class="hero-title">Portal Pendaftaran Mahasiswa Baru</h1>
        <p class="hero-subtitle">
          Formulir pendaftaran mahasiswa baru di Universitas Paramadina.
        </p>
      </div>
    </div>

    <div class="card-content">
      <form
        action="https://paramadina.siakadcloud.com/spmbfront/jalur-seleksi"
        method="POST"
      >
        <div>
          <h1 class="text-gelombang">Gelombang I</h1>
          <p class="text-semester">
            Semester genap 2024 - Semester Ganjil 2025
          </p>
        </div>
        <div class="form-radio">
          <!-- Pilih Jenjang -->
          <label>Pilih Jenjang <span class="required">*</span></label>
          <div class="radio-group">
            <input
              type="radio"
              id="s1"
              name="jenjang"
              value="s1"
              class="radio-input"
            />
            <label for="s1" class="radio-label">Strata 1</label>

            <input
              type="radio"
              id="s2"
              name="jenjang"
              value="s2"
              class="radio-input"
            />
            <label for="s2" class="radio-label">Strata 2</label>
          </div>
        </div>

        <!-- Pilih Program Studi -->
        <div id="prodi-container" class="hidden form-radio">
          <label>Pilih Program Studi <span class="required">*</span></label>
          <div id="program-studi-options" class="radio-group">
            <!-- Radio button akan ditambahkan melalui JavaScript -->
          </div>
        </div>

        <!-- Pilih Lokasi Kampus -->
        <div id="lokasi-kampus-container" class="hidden form-radio">
          <label>Pilih Lokasi Kampus <span class="required">*</span></label>
          <div id="lokasi-kampus-options" class="lokasi-options radio-group">
            <div>
              <input
                type="radio"
                id="lokasi-cipayung"
                name="lokasi-kampus"
                value="cipayung"
                class="radio-input"
              />
              <label for="lokasi-cipayung" class="radio-label">Cipayung</label>
            </div>
            <div>
              <input
                type="radio"
                id="lokasi-kuningan"
                name="lokasi-kampus"
                value="kuningan"
                class="radio-input"
              />
              <label for="lokasi-kuningan" class="radio-label">Kuningan</label>
            </div>
            <div>
              <input
                type="radio"
                id="lokasi-cikarang"
                name="lokasi-kampus"
                value="cikarang"
                class="radio-input"
              />
              <label for="lokasi-cikarang" class="radio-label">Cikarang</label>
            </div>
          </div>
        </div>

        <!-- Pilih Jenis Pendaftaran -->
        <div id="jenis-pendaftaran-container" class="hidden form-radio">
          <label>Pilih Jenis Pendaftaran <span class="required">*</span></label>
          <div
            id="jenis-pendaftaran-options"
            class="pendaftaran-options radio-group"
          >
            <div>
              <input
                type="radio"
                id="pendaftaran-baru"
                name="jenis-pendaftaran"
                value="baru"
                class="radio-input"
              />
              <label for="pendaftaran-baru" class="radio-label"
                >Peserta Didik Baru (SMA/SMK)</label
              >
            </div>
            <div>
              <input
                type="radio"
                id="pendaftaran-alih-jenjang"
                name="jenis-pendaftaran"
                value="alih-jenjang"
                class="radio-input"
              />
              <label for="pendaftaran-alih-jenjang" class="radio-label"
                >Alih Jenjang (D3 ke S1)</label
              >
            </div>
            <div>
              <input
                type="radio"
                id="pendaftaran-pindahan"
                name="jenis-pendaftaran"
                value="pindahan"
                class="radio-input"
              />
              <label for="pendaftaran-pindahan" class="radio-label"
                >Pindahan/Transfer</label
              >
            </div>
          </div>
        </div>

        <!-- Pilih Waktu Perkuliahan -->
        <div id="waktu-perkuliahan-container" class="hidden form-radio">
          <label for="waktu-perkuliahan"
            >Waktu Perkuliahan <span class="required">*</span></label
          >
          <div
            id="waktu-perkuliahan-options"
            class="waktu-perkuliahan-options radio-group"
          >
            <div>
              <input
                type="radio"
                id="waktu-perkuliahan-a"
                name="waktu-perkuliahan"
                value="kelas-a"
                class="radio-input"
              />
              <label for="waktu-perkuliahan-a" class="radio-label">
                Kelas A (09:45 - 18:00)
              </label>
            </div>
            <div>
              <input
                type="radio"
                id="waktu-perkuliahan-b"
                name="waktu-perkuliahan"
                value="kelas-b"
                class="radio-input"
              />
              <label for="waktu-perkuliahan-b" class="radio-label">
                Kelas B (18:30 - 21:00)
              </label>
            </div>
            <div>
              <input
                type="radio"
                id="waktu-perkuliahan-c"
                name="waktu-perkuliahan"
                value="kelas-c"
                class="radio-input"
              />
              <label for="waktu-perkuliahan-c" class="radio-label">
                Kelas C (Sabtu 07:00 - 18:00) + Online Weekdays
              </label>
            </div>
            <div>
              <input
                type="radio"
                id="waktu-perkuliahan-d"
                name="waktu-perkuliahan"
                value="kelas-d"
                class="radio-input"
              />
              <label for="waktu-perkuliahan-d" class="radio-label">
                Kelas D (Sabtu 13:00 - 22:00) + Online Weekdays
              </label>
            </div>
          </div>
        </div>

        <!-- Pilih Jalur Masuk -->
        <div id="jalur-masuk-container" class="hidden form-radio">
          <label>Jalur Masuk <span class="required">*</span></label>
          <div id="jalur-masuk-options" class="jalur-masuk-options radio-group">
            <input
              type="radio"
              id="tpa"
              name="jalur-masuk"
              value="tpa"
              class="radio-input"
            />
            <label for="tpa" class="radio-label"
              >Jalur Tes Potensi Akademik (TPA) - Reguler</label
            >
            <input
              type="radio"
              id="influencer"
              name="jalur-masuk"
              value="influencer"
              class="radio-input"
            />
            <label for="influencer" class="radio-label">Jalur Influencer</label>

            <input
              type="radio"
              id="non-akademik"
              name="jalur-masuk"
              value="non-akademik"
              class="radio-input"
            />
            <label for="non-akademik" class="radio-label"
              >Jalur Prestasi Non Akademik</label
            >

            <input
              type="radio"
              id="rapor"
              name="jalur-masuk"
              value="rapor"
              class="radio-input"
            />
            <label for="rapor" class="radio-label">Jalur Nilai Rapor</label>

            <input
              type="radio"
              id="tahfidz"
              name="jalur-masuk"
              value="tahfidz"
              class="radio-input"
            />
            <label for="tahfidz" class="radio-label"
              >Jalur Tahfidz Alquran</label
            >

            <input
              type="radio"
              id="utbk"
              name="jalur-masuk"
              value="utbk"
              class="radio-input"
            />
            <label for="utbk" class="radio-label">Jalur Skor UTBK</label>

            <!-- <label for="jalur-khusus">-- Jalur Khusus --</label> -->
            <input
              type="radio"
              id="kip"
              name="jalur-masuk"
              value="kip"
              class="radio-input"
            />
            <label for="kip" class="radio-label">Jalur KIP</label>
            <input
              type="radio"
              id="kerjasama"
              name="jalur-masuk"
              value="kerjasama"
              class="radio-input"
            />
            <label for="kerjasama" class="radio-label"
              >Jalur Beasiswa Kerjasama Perusahaan</label
            >
          </div>
        </div>

        <div class="card-container">
          <div class="card hidden" id="card-container">
            <h3>
              <span class="jenjang-dipilih"></span>
              <!--  S1/S2 -->
              <span class="kelas-dipilih"></span>
              <!-- Kelas A/B/C/D -->
              ( <span class="jam-dipilih"></span> )
              <!-- 09.45 - 18.00 WIB -->
              -
              <span id="jalur-dipilih"></span>
              <!-- Jalur Masuk -->
            </h3>
            <p>
              Waktu Perkuliahan:
              <span class="waktu-kuliah-dipilih"></span>
              (<span class="jam-dipilih"></span>).
            </p>
            <span class="location">
              ( <span id="kampus-dipilih"></span> )
              <span span class="jenjang-dipilih"></span>
              <span class="kelas-dipilih"></span>
            </span>
            <div class="info">
              <span
                ><i class="calendar-icon"></i> 7 Oktober 2024 - 27 Juni
                2025</span
              >
              <span class="fee">Biaya Daftar <b>Rp. 300.000</b></span>
            </div>
            <input type="hidden" id="key" name="key" />
            <!--Periode akademik/gelombang/jalur pendaftaran/sistem kuliah/id periode-->
            <input type="hidden" id="prodipilihan" name="prodipilihan" />
            <input type="hidden" name="act" value="detail" />
            <button class="register-btn">Daftar Sekarang</button>
          </div>
        </div>
      </form>
    </div>

    <script type="module">
       import { jenisPendaftaranData } from '/data/jalur-pendaftaran.js'
       import { sistemKuliahData } from '/data/sistem-kuliah.js'

      $(document).ready(function () {
        // Data program studi berdasarkan jenjang
        const prodiData = {
          s1: [
            "Teknik Informatika",
            "Psikologi",
            "Desain Komunikasi Visual",
            "Desain Produk",
            "Ilmu Komunikasi",
            "Hubungan Internasional",
            "Falsafah dan Agama",
            "Manajemen",
          ],
          s2: [
            "S2 - Psikologi",
            "S2 - Ilmu Hubungan Internasional",
            "S2 - Ilmu Komunikasi",
            "S2 - Manajemen",
            "S2 - Ilmu Agama Islam",
          ],
        };

        // Event saat radio button jenjang berubah
        $("input[name='jenjang']").change(function () {
          const jenjang = $(this).val(); // Ambil nilai dari radio button yang dipilih
          const prodiContainer = $("#prodi-container");
          const prodiOptions = $("#program-studi-options");

          // Reset semua dropdown berikutnya
          prodiOptions.empty();
          $(
            "#jenis-pendaftaran-container, #lokasi-kampus-container, #jalur-masuk-container, #beasiswa-container, #waktu-perkuliahan-container, #card-container"
          ).addClass("hidden");
          $("#jenis-pendaftaran").val("");
          $("#lokasi-kampus").val("");
          $("#jalur-masuk").val("");
          $("#waktu-perkuliahan").val("");

          // Tampilkan radio button program studi sesuai jenjang
          if (jenjang && prodiData[jenjang]) {
            prodiData[jenjang].forEach(function (prodi, index) {
              const prodiId = `prodi-${index}`;
              prodiOptions.append(`
                <div>
                  <input type="radio" id="${prodiId}" name="program-studi" value="${prodi.toLowerCase()}" class="radio-input">
                  <label for="${prodiId}" class="radio-label">${prodi}</label>
                </div>
              `);
            });
            prodiContainer.removeClass("hidden");
          } else {
            prodiContainer.addClass("hidden");
          }
        });

        $(document).on("change", "input[name='program-studi']", function () {
          const programStudi = $(this).val();
          const lokasiKampusContainer = $("#lokasi-kampus-container");
          const lokasiOptions = $("#lokasi-kampus-options input");

          // Reset semua opsi lokasi kampus menjadi disabled dan unchecked
          lokasiOptions.prop("disabled", true).prop("checked", false);

          if (programStudi) {
            lokasiKampusContainer.removeClass("hidden");

            // Aktifkan opsi lokasi kampus berdasarkan program studi yang dipilih
            if (programStudi === "teknik informatika") {
              $("#lokasi-cipayung, #lokasi-cikarang").prop("disabled", false);
            } else if (programStudi === "psikologi") {
              $("#lokasi-cipayung, #lokasi-kuningan, #lokasi-cikarang").prop(
                "disabled",
                false
              );
            } else if (programStudi === "desain komunikasi visual") {
              $("#lokasi-cipayung, #lokasi-cikarang").prop("disabled", false);
            } else if (programStudi === "desain produk") {
              $("#lokasi-cipayung, #lokasi-cikarang").prop("disabled", false);
            } else if (programStudi === "falsafah dan agama") {
              $("#lokasi-cipayung").prop("disabled", false);
            } else if (programStudi === "hubungan internasional") {
              $("#lokasi-cipayung, #lokasi-kuningan, #lokasi-cikarang").prop(
                "disabled",
                false
              );
            } else if (programStudi === "ilmu komunikasi") {
              $("#lokasi-cipayung, #lokasi-kuningan, #lokasi-cikarang").prop(
                "disabled",
                false
              );
            } else if (programStudi === "manajemen") {
              $("#lokasi-cipayung, #lokasi-kuningan, #lokasi-cikarang").prop(
                "disabled",
                false
              );
            }

            // Reset input lainnya
            $(
              "#jenis-pendaftaran-container, #waktu-perkuliahan-container, #jalur-masuk-container, #card-container"
            ).addClass("hidden");
            $("#jenis-pendaftaran").val("");
            $("#waktu-perkuliahan").val("");
            $("#jalur-masuk").val("");
          }
        });

        $(document).on("change", "input[name='lokasi-kampus']", function () {
          const lokasiKampus = $(this).val();
          const programStudi = $("input[name='program-studi']:checked").val();

          const jenisPendaftaranContainer = $("#jenis-pendaftaran-container");
          const pendaftaranBaru = $("#pendaftaran-baru");
          const pendaftaranAlihJenjang = $("#pendaftaran-alih-jenjang");
          const pendaftaranPindahan = $("#pendaftaran-pindahan");

          // Reset Jenis Pendaftaran
          $("input[name='jenis-pendaftaran']")
            .prop("checked", false)
            .prop("disabled", false);

          if (lokasiKampus) {
            jenisPendaftaranContainer.removeClass("hidden");

            // Logika untuk disabled pilihan berdasarkan lokasi kampus
            if (
              (programStudi === "psikologi" ||
                programStudi === "ilmu komunikasi" ||
                programStudi === "hubungan internasional" ||
                programStudi === "manajemen") &&
              lokasiKampus === "kuningan"
            ) {
              pendaftaranPindahan.prop("disabled", true);
            }
          } else {
            jenisPendaftaranContainer.addClass("hidden");
          }

          $("#waktu-perkuliahan-container").addClass("hidden");
          $("#jalur-masuk-container, #card-container").addClass("hidden");
          $("#waktu-perkuliahan, #jalur-masuk").val("");
        });

        $(document).on(
          "change",
          "input[name='jenis-pendaftaran']",
          function () {
            const waktuPerkuliahanContainer = $("#waktu-perkuliahan-container");
            const lokasiKampus = $("input[name='lokasi-kampus']:checked").val();
            const jenisPendaftaran = $(this).val();
            const programStudi = $("input[name='program-studi']:checked").val();

            if (jenisPendaftaran) {
              // Tampilkan kontainer waktu perkuliahan
              waktuPerkuliahanContainer.removeClass("hidden");

              // Reset semua radio button untuk waktu perkuliahan
              $("input[name='waktu-perkuliahan']")
                .prop("checked", false)
                .prop("disabled", false);

              // Atur visibilitas waktu perkuliahan berdasarkan jenis pendaftaran dan kondisi lainnya
              if (
                programStudi === "psikologi" &&
                lokasiKampus === "cipayung" &&
                jenisPendaftaran === "baru"
              ) {
                // Sembunyikan kelas B dan D jika sesuai kondisi
                // $("#waktu-perkuliahan-b, #waktu-perkuliahan-d").prop(
                  $("#waktu-perkuliahan-b").prop(
                  "disabled",
                  true
                );
              } else if (jenisPendaftaran === "pindahan") {
                // Tampilkan hanya kelas A
                $("#waktu-perkuliahan-a").prop("disabled", false);
                $(
                  "#waktu-perkuliahan-b, #waktu-perkuliahan-c, #waktu-perkuliahan-d"
                ).prop("disabled", true);
              } else if (jenisPendaftaran === "alih-jenjang") {
                // Tampilkan hanya kelas B, C, dan D
                $(
                  "#waktu-perkuliahan-b, #waktu-perkuliahan-c, #waktu-perkuliahan-d"
                ).prop("disabled", false);
                $("#waktu-perkuliahan-a").prop("disabled", true);
              } else {
                // Tampilkan semua kelas untuk jenis pendaftaran lainnya
                $("input[name='waktu-perkuliahan']").prop("disabled", false);
              }
            } else {
              // Sembunyikan kontainer waktu perkuliahan jika jenis pendaftaran kosong
              waktuPerkuliahanContainer.addClass("hidden");
            }

            // Reset nilai dan sembunyikan kontainer lain
            $("#jalur-masuk-container, #card-container").addClass("hidden");
            $("input[name='waktu-perkuliahan']").prop("checked", false);
            $("#jalur-masuk").val("");
          }
        );

        $(document).on(
          "change",
          "input[name='waktu-perkuliahan']",
          function () {
            const waktuPerkuliahan = $(
              "input[name='waktu-perkuliahan']:checked"
            ).val();
            const jalurMasukContainer = $("#jalur-masuk-container");
            const jenisPendaftaran = $(
              "input[name='jenis-pendaftaran']:checked"
            ).val();

            // Reset semua radio button jalur masuk
            $("input[name='jalur-masuk']")
              .prop("checked", false)
              .prop("disabled", false);

            // Tampilkan/Reset jalur-masuk-container
            if (waktuPerkuliahan) {
              jalurMasukContainer.removeClass("hidden");
            } else {
              jalurMasukContainer.addClass("hidden");
            }

            // Logika 1: Alih Jenjang
            if (
              jenisPendaftaran === "alih-jenjang" &&
              (waktuPerkuliahan === "kelas-b" ||
                waktuPerkuliahan === "kelas-c" ||
                waktuPerkuliahan === "kelas-d")
            ) {
              disableJalurMasukOptions([
                "influencer",
                "kip",
                "non-akademik",
                "tahfidz",
                "rapor",
                "utbk",
                "kerjasama",
              ]);
            }

            // Logika 2: Pindahan
            if (
              jenisPendaftaran === "pindahan" &&
              waktuPerkuliahan === "kelas-a"
            ) {
              disableJalurMasukOptions([
                "influencer",
                "kip",
                "non-akademik",
                "tahfidz",
                "rapor",
                "utbk",
                "kerjasama",
              ]);
            }

            // Logika 3: Baru
            if (
              (waktuPerkuliahan === "kelas-b" ||
                waktuPerkuliahan === "kelas-c" ||
                waktuPerkuliahan === "kelas-d") &&
              jenisPendaftaran === "baru"
            ) {
              disableJalurMasukOptions([
                "influencer",
                "kip",
                "non-akademik",
                "tahfidz",
                // "kerjasama",
              ]);
            }

            // Reset nilai jalur masuk
            $("#card-container").addClass("hidden");
            $("input[name='jalur-masuk']").prop("checked", false);
          }
        );

        // Fungsi untuk menonaktifkan radio button berdasarkan nilai value
        function disableJalurMasukOptions(options) {
          options.forEach(function (option) {
            $(`input[name='jalur-masuk'][value='${option}']`).prop(
              "disabled",
              true
            );
          });
        }

        $(document).on("change", "input[name='jalur-masuk']", function () {
          const cardContainer = $("#card-container");
          const jenjang = $("input[name='jenjang']:checked").val();
          const kelas = $("input[name='waktu-perkuliahan']:checked").val();
          const jalurMasuk = $("input[name='jalur-masuk']:checked")
            .next("label")
            .text();
          const jalurMasukValue = $("input[name='jalur-masuk']:checked").val();
          const waktuPerkuliahan = $("input[name='waktu-perkuliahan']:checked").val();
          const lokasiKampus = $("input[name='lokasi-kampus']:checked").val();
          const programStudi = $("input[name='program-studi']:checked").val();
          const alihJenjang = $("input[name='jenis-pendaftaran']:checked").val();

          let selectPendaftaran = "";
          
          if (alihJenjang === "alih-jenjang") {
            selectPendaftaran = 2; 
          } else if (alihJenjang === "pindahan") {
            selectPendaftaran = 3;
          } else if (alihJenjang === 'baru' && (kelas === 'kelas-b' || kelas === "kelas-c" || kelas === "kelas-d") && jalurMasukValue === "tpa") {
            selectPendaftaran = 23;
          } else {
            selectPendaftaran = jenisPendaftaranData.find(
            (pendaftaran) => pendaftaran.label === jalurMasukValue).id
          }

          console.log(jenjang)

          const selectSistemKuliah = sistemKuliahData.find((sistemKuliah) => {
            const lokasiLower = sistemKuliah.lokasi.toLowerCase();
            const kelasFormatted = sistemKuliah.kelas.toLowerCase().replace(/\s+/g, "-");
            
            return lokasiLower === lokasiKampus && kelasFormatted === kelas;
          });

          $.ajax({
            url: 'proses.php', // File tujuan
            type: 'POST', // Metode HTTP
            data: {
              jenjang: jenjang,
              prodi: programStudi,
              id_sistem_kuliah: selectSistemKuliah.id,
              id_jalur_pendaftaran: selectPendaftaran
            }, // Data yang dikirim ke proses.php
            success: function (response) {
              const data = JSON.parse(response);
              
              const periodeAkademik = data[0].periode_akademik;
              const gelombang = data[0].id_gelombang;
              const jalurPendaftaran = data[0].id_jalur_pendaftaran;
              const sistemKuliah = data[0].id_sistem_kuliah;
              const idPeriode = data[0].id_periode_pendaftaran;
              
              const generatedKey = `${periodeAkademik}/${gelombang}/${jalurPendaftaran}/${sistemKuliah}/${idPeriode}`;
              $("#key").val(generatedKey);
              $("#prodipilihan").val(data[0].id_program_studi);
            },
            error: function (xhr, status, error) {
              console.error('Terjadi kesalahan:', error);
            }
          });


          let newKelas = "";
          let jam = "";
          let waktuKuliah = "";

          if (kelas === "kelas-a") {
            newKelas = "Kelas A";
            jam = "09.45 - 18.00 WIB";
            waktuKuliah = "Senin - Jumat";
          } else if (kelas === "kelas-b") {
            newKelas = "Kelas B";
            jam = "18.30 - 21.00 WIB";
            waktuKuliah = "Senin - Jumat";
          } else if (kelas === "kelas-c") {
            newKelas = "Kelas C";
            jam = "07.00 - 18.00 WIB";
            waktuKuliah = "Sabtu";
          } else if (kelas === "kelas-d") {
            newKelas = "Kelas D";
            jam = "13.00 - 22.00 WIB";
            waktuKuliah = "Sabtu";
          }

          cardContainer.removeClass("hidden");
          $(".jenjang-dipilih").text(capitalizeFirstLetter(jenjang));
          $(".kelas-dipilih").text(newKelas);
          $(".jam-dipilih").text(jam);
          $(".waktu-kuliah-dipilih").text(waktuKuliah);
          $("#jalur-dipilih").text(jalurMasuk);
          $("#kampus-dipilih").text(capitalizeFirstLetter(lokasiKampus));

        });

        function capitalizeFirstLetter(text) {
          // Pastikan text tidak kosong
          if (!text) return text;

          // Pisahkan teks berdasarkan titik
          const sentences = text.split(".").map((sentence, index, array) => {
            // Trim untuk menghapus spasi berlebih di awal dan akhir kalimat
            sentence = sentence.trim();

            // Jika kalimat tidak kosong, ubah huruf pertama menjadi huruf besar
            if (sentence.length > 0) {
              // Untuk kalimat terakhir, pastikan menambahkan titik di akhir
              const capitalized = sentence[0].toUpperCase() + sentence.slice(1);
              return index === array.length - 1
                ? capitalized
                : capitalized + ".";
            }
            return "";
          });

          // Gabungkan kembali kalimat dengan tanda titik
          return sentences.join(" ");
        }
      });
    </script>
  </body>
</html>
