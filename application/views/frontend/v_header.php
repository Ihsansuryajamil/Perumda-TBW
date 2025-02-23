<!DOCTYPE html>
<html lang="en">
<head>
<style>
        /* Sembunyikan form output secara default */
    #output-form {
      display: none;
    }

    /* Flex container untuk kedua form */
    .form-container {
      display: flex;
      justify-content: center; /* Awalnya form cek tagihan berada di tengah */
      align-items: flex-start;
      margin-left: 100p;
    }

    .form-container.expanded {
      justify-content: space-between; /* Ketika tombol diklik, form cek tagihan ke kiri, output ke kanan */
    }

    .php-check-bill-form {
      background-color: #f7f9fb;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(17, 15, 15, 0.1);
      max-width: 500px;
    }

    .output-form {
      background-color: #f7f9fb;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      max-width: 1500px;
    }

        /* Geser form cek tagihan lebih ke kanan sebelum tombol diklik */
    .form-container.initial-state .php-check-bill-form {
      margin-left: 1050px; /* Atur nilai ini sesuai keinginan */
    }

    /* Kurangi jarak antara form cek tagihan dan output setelah tombol diklik */
    .form-container.active-state {
      justify-content: space-between;
      gap: 10px; /* Atur jarak antar form menjadi lebih dekat */
    }

    .output-form {
      margin-left: 20px; /* Pastikan margin kecil antara form cek tagihan dan output */
    }

    /* Responsif untuk layar yang lebih kecil */
    @media (max-width: 768px) {
      .form-container.initial-state .php-check-bill-form {
        margin-left: 500px; /* Nilai lebih kecil untuk perangkat mobile */
      }

      .form-container.active-state {
        flex-direction: column; /* Tampilkan form bertumpuk pada layar kecil */
        gap: 20px;
      }
    }
    /* Style for the vision and image section */
    .content {
      text-align: left;
    }
    .img-right {
      display: block;
      margin-left: auto;
      margin-right: 0; /* Ensures the image is aligned to the right */
    }
    .about-images {
      display: flex;
      flex-wrap: wrap;
    }

    .about-images .row {
      width: 100%;
    }

    .about-images img {
      width: 100%;
      object-fit: cover;
      border-radius: 8px;
    }

    /* Optional spacing adjustments */
    .col-lg-6 {
      padding: 10px;
    }

    .col-lg-12 {
      padding: 10px;
    }

    /* Media query for responsiveness */
    @media (max-width: 768px) {
      .col-lg-6, .col-lg-12 {
        width: 100%;
        padding: 5px;
      }
    }

  </style>
  <meta charset="utf-8">
  <title><?php echo $pengaturan->nama ?> - <?php echo $pengaturan->deskripsi ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="<?php echo $meta_keyword ?>" name="keywords">
  <meta content="<?php echo $meta_description ?>" name="description">


  <!-- Favicons -->
  <link href="<?php echo base_url().'/gambar/website/'.$pengaturan->logo; ?>" rel="icon">
  <link href="<?php echo base_url(); ?>assets_frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>assets_frontend/BizPage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/BizPage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/BizPage/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/BizPage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_frontend/BizPage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(); ?>assets_frontend/BizPage/assets/css/main.css" rel="stylesheet">

  <!-- Google reCAPTCHA -->
  <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
</head>

<body class="index-page">

  <!-- Header Section -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <!-- Logo Section -->
      <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center">
        <img src="<?php echo base_url().'/gambar/website/'.$pengaturan->logo; ?>" height="50">
        <h5 class="sitename"><strong><?php echo $pengaturan->nama ?></strong></h5>
      </a>

      <!-- Navbar Section -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="<?php echo base_url().'index.php/page/sejarah' ?>">Sejarah</a></li>
                  <li><a href="#TentangKami">Visi & Misi</a></li>
                  <li><a href="#footer">Jam Pelayanan</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Tentang Kelola Perusahaan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="<?php echo base_url().'index.php/page/struktur-organisasi' ?>">Struktur Organisasi</a></li>
                  <li><a href="<?php echo base_url().'index.php/page/kode-etik-pegawai' ?>">Kode Etik Pegawai</a></li>
                  <li><a href="<?php echo base_url().'index.php/page/tata-tertib-pegawai' ?>">Tata Tertib Pegawai</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#services"><span>Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="<?php echo base_url().'index.php/page/tata-tertib-pegawai' ?>">Pelayanan</a></li>
              <li><a href="<?php echo base_url().'index.php/page/tarif-air-minum' ?>">Tarif Air Minum</a></li>
              <li><a href="<?php echo base_url().'index.php/page/sambungan-baru' ?>">Sambungan Baru</a></li>
              <li><a href="<?php echo base_url().'index.php/page/klasifikasi-golongan-tarif' ?>">Klasifikasi Golongan Tarif</a></li>
              <li><a href="<?php echo base_url().'index.php/page/mobil-tangki' ?>">Mobil Tangki</a></li>
              <li><a href="<?php echo base_url().'index.php/page/metode-pembayaran-air' ?>">Metode Pembayaran Air</a></li>
              <li><a href="<?php echo base_url().'index.php/page/pengaduan-pelayanan' ?>">Pengaduan Pelayanan</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Perkembangan Perusahaan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="<?php echo base_url().'index.php/page/jumlah-pelanggan' ?>">Jumlah Pelanggan</a></li>
              <li><a href="<?php echo base_url().'index.php/page/cakupan-layanan' ?>">Cakupan Layanan</a></li>
              <li><a href="<?php echo base_url().'index.php/page/laporan-kinerja' ?>">Laporan Kinerja</a></li>
              <li><a href="<?php echo base_url().'index.php/page/survei-kepuasan-pelanggan' ?>">Survei Kepuasan Pelanggan</a></li>
              <li><a href="<?php echo base_url().'index.php/page/rasio-pelanggan-dan-pegawai' ?>">Rasio Pelanggan dan Pegawai</a></li>
              <li><a href="<?php echo base_url().'index.php/page/penghargaan-sertifikat' ?>">Penghargaan & Sertifikat</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="<?php echo base_url().'index.php/page/karir' ?>">Karir </a></li>
              <li><a href="#berita">Informasi Perumda <br>TBW Kota Sukabumi</a></li>
              <li><a href="<?php echo base_url().'index.php/page/privacy-policy-bandarmasih' ?>">Privacy & Policy</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo base_url().'index.php/login' ?>" class="btn-login">Login</a>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
  <!-- End Header Section -->
