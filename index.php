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
          <h1 class="text-gelombang" id="text-gelombang"></h1>
          <p class="text-semester" id="text-semester"></p>
        </div>
        <div class="form-radio">
          <!-- Pilih Jenjang -->
          <label>Pilih Jenjang <span class="required">*</span></label>
          <div id="jenjang-options" class="radio-group">
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
          </div>
        </div>

        <!-- Pilih Jenis Pendaftaran -->
        <div id="jenis-pendaftaran-container" class="hidden form-radio">
          <label>Pilih Jenis Pendaftaran <span class="required">*</span></label>
          <div
            id="jenis-pendaftaran-options"
            class="pendaftaran-options radio-group"
          >
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
          </div>
        </div>

        <!-- Pilih Jalur Masuk -->
        <div id="jalur-masuk-container" class="hidden form-radio">
          <label>Jalur Masuk <span class="required">*</span></label>
          <div id="jalur-masuk-options"></div>
          <div id="jalur-beasiswa-inline" class="hr-inline">
            <h5>Beasiswa</h5>
            <hr>
          </div>
          <div id="jalur-masuk-options-beasiswa" class="radio-group"></div>
          <div id="jalur-khusus-inline" class="hr-inline">
            <h5>Jalur Khusus</h5>
            <hr>
          </div>
          <div id="jalur-masuk-options-khusus" class="radio-group"></div>
        </div>

        <div class="card-container">
          <div class="card hidden" id="card-container">
            <h3>
              <span id="jenjang-dipilih"></span>
              -
              <span id="jalur-dipilih"></span>
              <span id="gelombang-dipilih"></span>
            </h3>
            <p>
              <span id="waktu-kuliah-dipilih"></span>
            </p>
            <span class="location">
              <span id="kampus-dipilih"></span>
            </span>
            <div class="info">
              <span>
                <i class="calendar-icon"></i>
                <span id="tanggal_awal_pendaftaran"></span>
                -
                <span id="tanggal_akhir_pendaftaran"></span>
                </span>
              <span class="fee">Biaya Daftar <b id="biaya-dipilih"></b></span>
            </div>
            <input type="hidden" id="key" name="key" />
            <input type="hidden" id="prodipilihan" name="prodipilihan" />
            <input type="hidden" name="act" value="detail" />
            <button class="register-btn">Daftar Sekarang</button>
          </div>
        </div>
      </form>
    </div>

    <script type="module">
      $(document).ready(function () {
        const gelombang = 1;
        const semesterMulai = "Semester genap 2024";
        const semesterSelesai = "Semester Ganjil 2025";

        $("#text-gelombang").text(`Gelombang ${gelombang}`);
        $("#text-semester").text(`${semesterMulai} - ${semesterSelesai}`);
        
        // GET JENJANG
        $.ajax({
            url: 'getJenjang.php',
            type: 'POST', // Metode HTTP
            data: {}, // Data yang dikirim ke proses.php
            success: function (response) {
              const data = JSON.parse(response);

              const jenjangOptions = $("#jenjang-options");
              jenjangOptions.empty();
              
              data.forEach(function (jenjang) {
                jenjangOptions.append(`
                  <div>
                    <input type="radio" id="jenjang-${jenjang.jenjang_program_studi}" name="jenjang" value="${jenjang.jenjang_program_studi}" class="radio-input">
                    <label for="jenjang-${jenjang.jenjang_program_studi}" class="radio-label">${jenjang.jenjang_program_studi}</label>
                  </div>
                `);
              });

              $("#jenjang-options").text(data[0].nama_periode_pendaftaran);
            },
            error: function (xhr, status, error) {
              console.error('Terjadi kesalahan:', error);
            }
          });
          // END GET JENJANG
        
        // Event saat radio button jenjang berubah
        $(document).on("change", "input[name='jenjang']", function () {
          const jenjang = $(this).val();
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
          if (jenjang) {
          // GET PROGRAM STUDI
          $.ajax({
            url: 'getProgramStudi.php',
            type: 'POST',
            data: {
              jenjang: jenjang
            }, // Data yang dikirim ke proses.php
            success: function (response) {
              const data = JSON.parse(response);
              const programStudiOptions = $("#program-studi-options");

              programStudiOptions.empty();

              data.forEach(function (programStudi) {
                programStudiOptions.append(`
                  <div>
                    <input type="radio" id="program-studi-${programStudi.id_program_studi}" name="program-studi" value="${programStudi.id_program_studi}" class="radio-input">
                    <label for="program-studi-${programStudi.id_program_studi}" class="radio-label">${programStudi.program_studi}</label>
                  </div>
                `);
              });
            },
            error: function (xhr, status, error) {
              console.error('Terjadi kesalahan:', error);
            }
          });
          // END GET PROGRAM STUDI
            prodiContainer.removeClass("hidden");
          } else {
            prodiContainer.addClass("hidden");
          }
        });

        $(document).on("change", "input[name='program-studi']", function () {
          const programStudi = $(this).val();
          const lokasiKampusContainer = $("#lokasi-kampus-container");
          const lokasiOptions = $("#lokasi-kampus-options input");
          const jenjang = $("input[name='jenjang']:checked").val();


          if (programStudi) {
            if(jenjang == 'S1'){
                $.ajax({
                  url: 'getLokasiKampus.php',
                  type: 'POST',
                  data: {
                    jenjang: jenjang,
                    id_prodi: programStudi
                  },
                  success: function (response) {
                    const data = JSON.parse(response);
                    const allCampuses = ['Cipayung', 'Cikarang', 'Kuningan'];

                    const lokasiKampusOptions = $("#lokasi-kampus-options");
                    lokasiKampusOptions.empty();

                    // Render semua kampus
                    allCampuses.forEach(function (kampus) {
                      // Cek apakah kampus ada dalam data yang diterima
                      const kampusAvailable = data.some(function (lokasiKampus) {
                        return lokasiKampus.lokasi === kampus;
                      });

                      lokasiKampusOptions.append(`
                        <div>
                          <input 
                            type="radio" 
                            id="lokasi-kampus-${kampus}" 
                            name="lokasi-kampus" 
                            value="${kampus}" 
                            class="radio-input"
                            ${kampusAvailable ? '' : 'disabled'}
                          >
                          <label for="lokasi-kampus-${kampus}" class="radio-label">${kampus}</label>
                        </div>
                      `);
                    });
                  },
                  error: function (xhr, status, error) {
                    console.error('Terjadi kesalahan:', error);
                  }
                });
              // END GET LOKASI KAMPUS
                lokasiKampusContainer.removeClass("hidden");
            }else{
              $.ajax({
                  url: 'getLokasiKampusS2.php',
                  type: 'POST',
                  data: {
                    jenjang: jenjang,
                    id_prodi: programStudi
                  },
                  success: function (response) {
                    const data = JSON.parse(response);
                    const allCampuses = ['Cipayung', 'Cikarang', 'Kuningan'];

                    const lokasiKampusOptions = $("#lokasi-kampus-options");
                    lokasiKampusOptions.empty();

                    // Render semua kampus
                    allCampuses.forEach(function (kampus) {
                      // Cek apakah kampus ada dalam data yang diterima
                      const kampusAvailable = data.some(function (lokasiKampus) {
                        return lokasiKampus.lokasi === kampus;
                      });

                      lokasiKampusOptions.append(`
                        <div>
                          <input 
                            type="radio" 
                            id="lokasi-kampus-${kampus}" 
                            name="lokasi-kampus" 
                            value="${kampus}" 
                            class="radio-input"
                            ${kampusAvailable ? '' : 'disabled'}
                          >
                          <label for="lokasi-kampus-${kampus}" class="radio-label">${kampus}</label>
                        </div>
                      `);
                    });
                  },
                  error: function (xhr, status, error) {
                    console.error('Terjadi kesalahan:', error);
                  }
                });
              // END GET LOKASI KAMPUS
                lokasiKampusContainer.removeClass("hidden");
            }
           
           


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
          const jenjang = $("input[name='jenjang']:checked").val();
          const jenisPendaftaranContainer = $("#jenis-pendaftaran-container");

          // if (lokasiKampus && jenjang === "S1") {
            if (jenjang === "S1") {
            // GET JENIS PENDAFTARAN
            $.ajax({
              url: 'getJenisPendaftaran.php',
              type: 'POST',
              data: {
                jenjang: jenjang,
                id_prodi: programStudi,
                lokasi: lokasiKampus
              },
              success: function (response) {
                const data = JSON.parse(response);

                const allJalurPendaftaran = ['Jalur SMA/SMK', 'Pindahan', 'Alih Jenjang (D3 ke S1)'];

                const jenisPendaftaranOptions = $("#jenis-pendaftaran-options");
                jenisPendaftaranOptions.empty();

                allJalurPendaftaran.forEach(function (jalurPendaftaran) {
                  // Periksa apakah jalur pendaftaran tersedia dalam data dari server
                  const jalurPendaftaranData = data.find(function (jenisPendaftaran) {
                    return jenisPendaftaran.jalur_pendaftaran === jalurPendaftaran;
                  });

                  const jalurPendaftaranAvailable = !!jalurPendaftaranData; // Cek apakah data tersedia
                  const idJalurPendaftaran = jalurPendaftaranData ? jalurPendaftaranData.id_jalur_pendaftaran : '';

                  // Tambahkan elemen radio ke dalam HTML
                  jenisPendaftaranOptions.append(`
                    <div>
                      <input 
                        type="radio" 
                        id="jenis-pendaftaran-${jalurPendaftaran.replace(/\s+/g, '-').toLowerCase()}" 
                        name="jenis-pendaftaran" 
                        value="${jalurPendaftaran}" 
                        class="radio-input"
                        data-id-jalur-pendaftaran="${idJalurPendaftaran}" 
                        ${jalurPendaftaranAvailable ? '' : 'disabled'}
                      >
                      <label for="jenis-pendaftaran-${jalurPendaftaran.replace(/\s+/g, '-').toLowerCase()}" class="radio-label">
                        ${jalurPendaftaran}
                      </label>
                    </div>
                  `);
                });
              },
              error: function (xhr, status, error) {
                console.error('Terjadi kesalahan:', error);
              }
            });
            // END GET JENIS PENDAFTARAN
            
            jenisPendaftaranContainer.removeClass("hidden");
          } else if(jenjang === "S2") {
           // Tampilkan opsi statis untuk jenjang S2
              const jenisPendaftaranOptions = $("#jenis-pendaftaran-options");
              jenisPendaftaranOptions.empty();

              jenisPendaftaranOptions.append(`
                <div>
                  <input 
                    type="radio" 
                    id="jenis-pendaftaran-lulusan-s1" 
                    name="jenis-pendaftaran" 
                    value="lulusan-s1" 
                    class="radio-input"
                  >
                  <label for="jenis-pendaftaran-lulusan-s1" class="radio-label">
                    Lulusan S1
                  </label>
                </div>
              `);

              jenisPendaftaranContainer.removeClass("hidden");
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
            const jenjang = $("input[name='jenjang']:checked").val();

            if (jenisPendaftaran) {
              // GET WAKTU PERKULIAHAN,
              if (jenjang == "S1") {
                $.ajax({
                  url: 'getWaktuPerkuliahanS1.php',
                  type: 'POST',
                  data: {
                    jenjang: jenjang,
                    id_prodi: programStudi,
                    lokasi: lokasiKampus,
                    jenis_pendaftaran: jenisPendaftaran
                  },
                  success: function (response) {
                    const data = JSON.parse(response);

                    // Modifikasi data jika kondisi tertentu terpenuhi
                    const modifiedData = data.map(function (item) {
                      if (item.nama_periode_pendaftaran === "Jalur Transfer ( Mahasiswa Pindahan)") {
                        item.nama_periode_pendaftaran = "S1 Kelas A (09.45 - 18.00 WIB)";
                      }
                      return item;
                    });

                    const waktuPerkuliahanOptions = $("#waktu-perkuliahan-options");
                    waktuPerkuliahanOptions.empty();

                    const allWaktuKuliah = [
                      'S1 Kelas A (09.45 - 18.00 WIB)',
                      'S1 Kelas B (18.30 - 21.00 WIB) + Online (Sabtu)',
                      'S1 Kelas C (Sabtu Sesi 1) + Online (On Weekdays)',
                      'S1 Kelas D (Sabtu sesi 2) + Online (On Weekdays)'
                    ];

                    // Render semua waktu perkuliahan
                    allWaktuKuliah.forEach(function (WaktuKuliah) {
                      // Cek apakah Waktu perkuliahan ada dalam data yang diterima
                      const WaktuKuliahAvailable = modifiedData.some(function (WaktuKuliahAvail) {
                        return WaktuKuliahAvail.nama_periode_pendaftaran === WaktuKuliah;
                      });
                      
                      // Tambahkan elemen radio
                      waktuPerkuliahanOptions.append(`
                        <div>
                          <input 
                            type="radio" 
                            id="waktu-perkuliahan-${WaktuKuliah}" 
                            name="waktu-perkuliahan" 
                            value="${WaktuKuliah}" 
                            class="radio-input"
                            ${WaktuKuliahAvailable ? '' : 'disabled'}
                          >
                          <label for="waktu-perkuliahan-${WaktuKuliah}" class="radio-label">${WaktuKuliah}</label>
                        </div>
                      `);
                    });
                  },
                  error: function (xhr, status, error) {
                    console.error('Terjadi kesalahan:', error);
                  }
                });
                waktuPerkuliahanContainer.removeClass("hidden");
              } else {
                $.ajax({
                  url: 'getWaktuPerkuliahan.php',
                  type: 'POST',
                  data: {
                    jenjang: jenjang,
                    id_prodi: programStudi,
                    lokasi: lokasiKampus,
                  },
                  success: function (response) {
                    const data = JSON.parse(response);
                   
                    const waktuPerkuliahanOptions = $("#waktu-perkuliahan-options");
                    waktuPerkuliahanOptions.empty();

                    // Render input radio langsung dari data
                    data.forEach(function (item) {
                      waktuPerkuliahanOptions.append(`
                        <div>
                          <input 
                            type="radio" 
                            id="waktu-perkuliahan-${item.id_periode_pendaftaran}" 
                            name="waktu-perkuliahan" 
                            value="${item.nama_periode_pendaftaran}" 
                            data-id="${item.nama_periode_pendaftaran}"
                            class="radio-input"
                          >
                          <label for="waktu-perkuliahan-${item.id_periode_pendaftaran}" class="radio-label">${item.nama_periode_pendaftaran} </label>
                        </div>
                      `);
                    });
                  }
                });
                waktuPerkuliahanContainer.removeClass("hidden");
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
            const waktuPerkuliahan = $("input[name='waktu-perkuliahan']:checked").val();
            const jalurMasukContainer = $("#jalur-masuk-container");
            const jenisPendaftaran = $("input[name='jenis-pendaftaran']:checked").val();
            const jenjang = $("input[name='jenjang']:checked").val();
            const programStudi = $("input[name='program-studi']:checked").val();
            const lokasiKampus = $("input[name='lokasi-kampus']:checked").val();
            const periodePendaftaran = $("input[name='waktu-perkuliahan']:checked").val();
         
            if (waktuPerkuliahan) {
              // GET JALUR MASUK
              if (jenjang == "S1") {
                $.ajax({
                  url: "getJalurMasukS1.php",
                  type: "POST",
                  data: {
                    jenjang: jenjang,
                    id_prodi: programStudi,
                    lokasi: lokasiKampus,
                    periode_pendaftaran: waktuPerkuliahan,
                    jenis_pendaftaran: jenisPendaftaran,
                    gelombang: gelombang
                  },
                  success: function (response) {
                    const data = JSON.parse(response);

                    const jalurMasukOptions = $("#jalur-masuk-options");
                        jalurMasukOptions.empty();

                    const jalurMasukOptionBeasiswa = $("#jalur-masuk-options-beasiswa");
                    jalurMasukOptionBeasiswa.empty();

                    const jalurMasukOptionKhusus = $("#jalur-masuk-options-khusus");
                    jalurMasukOptionKhusus.empty();

                    // Nama jalur pendaftaran yang harus diabaikan
                    const excludedNames = [
                      "Alih Jenjang (D3 ke S1)",
                      "Pindahan",
                      // "Jalur SMA/SMK",
                    ];

                    // Jalur khusus yang hanya ditampilkan dalam kategori tertentu
                    const specialNames = ["Jalur KIP Prestasi Paramadina", "Beasiswa KIP Kuliah", "Beasiswa Kerjasama Perusahaan"];

                    if (data.some(jalurMasuk => 
                      (jalurMasuk.jalur_pendaftaran === "Jalur SMA/SMK" || jalurMasuk.jalur_pendaftaran === "Beasiswa Kerjasama Perusahaan") &&
                      (waktuPerkuliahan === "S1 Kelas B (18.30 - 21.00 WIB) + Online (Sabtu)"
                      || waktuPerkuliahan === "S1 Kelas C (Sabtu Sesi 1) + Online (On Weekdays)"
                      || waktuPerkuliahan === "S1 Kelas D (Sabtu sesi 2) + Online (On Weekdays)")
                    )) {
                      $("#jalur-beasiswa-inline").hide();
                    } else if(data.some(jalurMasuk => 
                      jalurMasuk.jalur_pendaftaran === "Pindahan" && waktuPerkuliahan === "S1 Kelas A (09.45 - 18.00 WIB)")) {
                      $("#jalur-beasiswa-inline").hide();
                      $("#jalur-khusus-inline").hide();
                    } else if (data.some(jalurMasuk => jalurMasuk.jalur_pendaftaran === "Alih Jenjang (D3 ke S1)" && (waktuPerkuliahan === "S1 Kelas B (18.30 - 21.00 WIB) + Online (Sabtu)" || waktuPerkuliahan === "S1 Kelas C (Sabtu Sesi 1) + Online (On Weekdays)" || waktuPerkuliahan === "S1 Kelas D (Sabtu sesi 2) + Online (On Weekdays)"))) {
                      $("#jalur-beasiswa-inline").hide();
                      $("#jalur-khusus-inline").hide();
                    } else {
                      $("#jalur-beasiswa-inline").show();
                      $("#jalur-khusus-inline").show()
                    }

                    // Proses seluruh data dari dataList
                    data.forEach(function (jalurMasuk) {

                      if (jalurMasuk.jalur_pendaftaran === "Jalur SMA/SMK" &&
                      (waktuPerkuliahan === "S1 Kelas B (18.30 - 21.00 WIB) + Online (Sabtu)"
                      || waktuPerkuliahan === "S1 Kelas C (Sabtu Sesi 1) + Online (On Weekdays)"
                      || waktuPerkuliahan === "S1 Kelas D (Sabtu sesi 2) + Online (On Weekdays)"))
                      {
                        jalurMasuk.jalur_pendaftaran = "Jalur Tes Potensial Akademik";
                      }

                      if (jalurMasuk.jalur_pendaftaran === "Pindahan" && 
                      (waktuPerkuliahan === "S1 Kelas A (09.45 - 18.00 WIB)")) {
                        jalurMasuk.jalur_pendaftaran = "Jalur Tes Potensial Akademik";
                      }
                      
                      if (jalurMasuk.jalur_pendaftaran === "Alih Jenjang (D3 ke S1)" && (waktuPerkuliahan === "S1 Kelas B (18.30 - 21.00 WIB) + Online (Sabtu)" || waktuPerkuliahan === "S1 Kelas C (Sabtu Sesi 1) + Online (On Weekdays)" || waktuPerkuliahan === "S1 Kelas D (Sabtu sesi 2) + Online (On Weekdays)")) {
                        jalurMasuk.jalur_pendaftaran = "Jalur Tes Potensial Akademik";
                      }

                      // Abaikan nama jalur pendaftaran yang ada di excludedNames
                      if (!excludedNames.includes(jalurMasuk.jalur_pendaftaran)) {
                        if (jalurMasuk.jalur_pendaftaran === "Jalur Tes Potensial Akademik") {
                          // Tambahkan "Jalur Tes Potensial Akademik" di awal
                          jalurMasukOptions.prepend(`
                            <div class="radio-group">
                              <input 
                                type="radio" 
                                id="jalur-masuk-${jalurMasuk.id_jalur_pendaftaran}" 
                                name="jalur-masuk" 
                                value="${jalurMasuk.id_jalur_pendaftaran}" 
                                class="radio-input"
                              >
                              <label for="jalur-masuk-${jalurMasuk.id_jalur_pendaftaran}" class="radio-label">${jalurMasuk.jalur_pendaftaran}</label>
                            </div>
                          `);
                        } else if (specialNames.includes(jalurMasuk.jalur_pendaftaran)) {
                          jalurMasukOptionKhusus.append(`
                            <div class="radio-group">
                              <input 
                                type="radio" 
                                id="jalur-masuk-${jalurMasuk.id_jalur_pendaftaran}" 
                                name="jalur-masuk" 
                                value="${jalurMasuk.id_jalur_pendaftaran}" 
                                class="radio-input"
                              >
                              <label for="jalur-masuk-${jalurMasuk.id_jalur_pendaftaran}" class="radio-label">${jalurMasuk.jalur_pendaftaran}</label>
                            </div>
                          `);
                        } else {
                          // Tambahkan jalur masuk lainnya
                          jalurMasukOptionBeasiswa.prepend(`
                            <input 
                              type="radio" 
                              id="jalur-masuk-${jalurMasuk.id_jalur_pendaftaran}" 
                              name="jalur-masuk" 
                              value="${jalurMasuk.id_jalur_pendaftaran}" 
                              class="radio-input"
                            >
                            <label for="jalur-masuk-${jalurMasuk.id_jalur_pendaftaran}" class="radio-label">${jalurMasuk.jalur_pendaftaran}</label>
                          `);
                        }
                      }
                    });
                  },
                  error: function (xhr, status, error) {
                    console.error("Terjadi kesalahan:", error);
                  },
                });

                jalurMasukContainer.removeClass("hidden");
              }else{
                $.ajax({
                  url: 'getJalurMasuk.php',
                  type: 'POST',
                  data: {
                    jenjang: jenjang,
                    id_prodi: programStudi,
                    lokasi: lokasiKampus,
                    periode_pendaftaran: periodePendaftaran,
                 
                  },
                  success: function (response) {
                    const data = JSON.parse(response);
                    
                    const jalurMasukOptions = $("#jalur-masuk-options");
                    jalurMasukOptions.empty();

                    $("#jalur-beasiswa-inline").hide();
                    $("#jalur-khusus-inline").hide();
                    
                    // Render input radio langsung dari data
                    data.forEach(function (item) {
                      // console.log('jalur', item)
                      jalurMasukOptions.append(`
                        <div>
                          <input 
                            type="radio" 
                           id="jalur-masuk-${item.id_jalur_pendaftaran}"  
                            name="jalur-masuk" 
                            value="${item.id_jalur_pendaftaran}" 
                            class="radio-input"
                          >
                          <label for="jalur-masuk-${item.id_jalur_pendaftaran}" class="radio-label">${item.jalur_pendaftaran}</label>
                        </div>
                      `);
                    });
                  }
                });
                jalurMasukContainer.removeClass("hidden");
              }
            } else {
              jalurMasukContainer.addClass("hidden");
            }

            // Reset nilai jalur masuk
            $("#card-container").addClass("hidden");
            $("input[name='jalur-masuk']").prop("checked", false);
          }
        );

        $(document).on("change", "input[name='jalur-masuk']", function () {
          const cardContainer = $("#card-container");
          const jenjang = $("input[name='jenjang']:checked").val();
          const jalurMasuk = $("input[name='jalur-masuk']:checked").val();
          const waktuPerkuliahan = $("input[name='waktu-perkuliahan']:checked").val();
          const lokasiKampus = $("input[name='lokasi-kampus']:checked").val();
          const programStudi = $("input[name='program-studi']:checked").val();
          const jenisPendaftaran = $("input[name='jenis-pendaftaran']:checked").val();
          const namaperiodePendaftaran = $("input[name='waktu-perkuliahan']:checked").data('id');
          // console.log('nama',programStudi)

          if (jenjang === "S1") {
            $.ajax({
              url: 'prosesS1.php',
              type: 'POST',
              data: {
                lokasi: lokasiKampus,
                jenjang: jenjang,
                id_prodi: programStudi,
                id_jalur_pendaftaran: jalurMasuk,
                nama_periode_pendaftaran: waktuPerkuliahan,
                jenis_pendaftaran: jenisPendaftaran
              },
              success: function (response) {
                const data = JSON.parse(response);
                // console.log(data);
                const periodeAkademik = data[0].periode_akademik;
                const gelombang = data[0].id_gelombang;
                const jalurPendaftaran = data[0].id_jalur_pendaftaran;
                const sistemKuliah = data[0].id_sistem_kuliah;
                const idPeriode = data[0].id_periode_pendaftaran;
  
                $("#jenjang-dipilih").text(data[0].nama_periode_pendaftaran);
                $("#jalur-dipilih").text(data[0].jalur_pendaftaran);
                $("#gelombang-dipilih").text(data[0].gelombang);
                $("#kampus-dipilih").text(data[0].sistem_kuliah);
                $("#waktu-kuliah-dipilih").html(truncateText(data[0].keterangan, 150));
                $("#tanggal_awal_pendaftaran").text(formatTanggal(data[0].tanggal_awal_pendaftaran));
                $("#tanggal_akhir_pendaftaran").text(formatTanggal(data[0].tanggal_akhir_pendaftaran));
                $("#biaya-dipilih").text(jenjang === "S1" ? "Rp. 300.000" : "Rp. 500.000");
                
                const generatedKey = `${periodeAkademik}/${gelombang}/${jalurPendaftaran}/${sistemKuliah}/${idPeriode}`;
                $("#key").val(generatedKey);
                $("#prodipilihan").val(data[0].id_program_studi);
              },
              error: function (xhr, status, error) {
                console.error('Terjadi kesalahan:', error);
              }
            });
          } else {
          // console.log('data',lokasiKampus, jenjang, programStudi, jalurMasuk, waktuPerkuliahan)
            $.ajax({
            url: 'proses.php',
            type: 'POST',
            data: {
              lokasi: lokasiKampus,
                jenjang: jenjang,
                id_prodi: programStudi,
                id_jalur_pendaftaran: jalurMasuk,
                nama_periode_pendaftaran: waktuPerkuliahan,
                jenis_pendaftaran: jenisPendaftaran
              // nama_periode_pendaftaran: waktuPerkuliahan
            },
            success: function (response) {
              const data = JSON.parse(response);
            //  console.log('tes',data)
              const periodeAkademik = data[0].periode_akademik;
              const gelombang = data[0].id_gelombang;
              const jalurPendaftaran = data[0].id_jalur_pendaftaran;
              const sistemKuliah = data[0].id_sistem_kuliah;
              const idPeriode = data[0].id_periode_pendaftaran;

              $("#jenjang-dipilih").text(data[0].nama_periode_pendaftaran);
              $("#jalur-dipilih").text(data[0].jalur_pendaftaran);
              $("#gelombang-dipilih").text(data[0].gelombang);
              $("#kampus-dipilih").text(data[0].sistem_kuliah);
              $("#waktu-kuliah-dipilih").html(truncateText(data[0].keterangan, 150));
              $("#tanggal_awal_pendaftaran").text(formatTanggal(data[0].tanggal_awal_pendaftaran));
              $("#tanggal_akhir_pendaftaran").text(formatTanggal(data[0].tanggal_akhir_pendaftaran));
              $("#biaya-dipilih").text(jenjang === "S1" ? "Rp. 300.000" : "Rp. 500.000");
              
              const generatedKey = `${periodeAkademik}/${gelombang}/${jalurPendaftaran}/${sistemKuliah}/${idPeriode}`;
              $("#key").val(generatedKey);
              $("#prodipilihan").val(idPeriode);
            },
            error: function (xhr, status, error) {
              console.error('Terjadi kesalahan:', error);
            }
          });

          cardContainer.removeClass("hidden");
          }

          cardContainer.removeClass("hidden");
        });

        function truncateText(text, maxLength) {
          // Jika teks lebih pendek dari batas, kembalikan teks asli
          if (text.length <= maxLength) {
            return text;
          }
          // Potong teks hingga panjang yang diinginkan
          return text.substring(0, maxLength) + "...";
        }

        function formatTanggal(tanggal) {
          // Konversi string tanggal ke objek Date
          const date = new Date(tanggal);

          // Periksa apakah tanggal valid
          if (isNaN(date)) {
            throw new Error("Format tanggal tidak valid. Gunakan format YYYY-MM-DD.");
          }

          // Format tanggal menggunakan Intl.DateTimeFormat
          return new Intl.DateTimeFormat("id-ID", {
            day: "numeric",
            month: "long",
            year: "numeric",
          }).format(date);
        }

      });
    </script>
  </body>
</html>
