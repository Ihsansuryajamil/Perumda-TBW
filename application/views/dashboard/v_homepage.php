<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets_frontend/BizPage/assets/img/hero-carousel/FotoAA.png" alt="">
           
          <div class="carousel-container">
            <h2><?php echo $pengaturan->deskripsi ?></h2>
            <!-- <h2>Perumda TBW Kota Sukabumi</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#featured-services" class="btn-get-started">Masuk</a> -->
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets_frontend/BizPage/assets/img/hero-carousel/FotoBB.png" alt="">
          <div class="carousel-container">
            <h2><?php echo $pengaturan->deskripsi ?></h2>
            <!-- <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p> -->
            <!-- <a href="#featured-services" class="btn-get-started">Masuk</a> -->
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets_frontend/BizPage/assets/img/hero-carousel/FotoCC.png" alt="">
          <!-- <div class="carousel-container">
            <h2>Perumda TBW Kota Sukabumi</h2>
            <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
            <a href="#featured-services" class="btn-get-started">Masuk</a>
          </div> -->
        </div>

        <!-- <div class="carousel-item">
          <img src="assets/img/hero-carousel/FotoB.jpg" alt="">
          <div class="carousel-container">
            <h2>Perumda TBW Kota Sukabumi</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
            <a href="#featured-services" class="btn-get-started">Masuk</a>
          </div>
        </div>

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/" alt="">
          <div class="carousel-container">
            <h2>Perumda TBW Kota Sukabumi</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#featured-services" class="btn-get-started">Masuk</a>
          </div>
        </div> -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section>
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

          <!-- Carousel Items -->
          <?php foreach($fotoHeader as $key => $fh) { ?>
            <div class="carousel-item <?php echo $key == 0 ? 'active' : ''; ?>">
                <img src="<?php echo base_url('gambar/artikel/' . $fh->gambar); ?>" alt="<?php echo $fh->judul_foto_header; ?>">
                
                <div class="carousel-container">
                    <h2><?php echo $fh->judul_foto_header; ?></h2>
                    <p><?php echo $fh->deskripsi; ?></p>
                </div>
            </div>
          <?php } ?>
          <!-- End Carousel Items -->

          <!-- Navigation Controls -->
          <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>

          <ol class="carousel-indicators"></ol>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="about" class="dark-background"><!-- /Featured Services Section -->
      <div class="" data-aos="fade-up" data-aos-delay="200">
        <div class="container section-image">
          <h5>Terwujudnya <a href=""><strong>Penyedia Utama Air Bersih</strong></a> dengan<h1><strong>KUALITAS PELAYAN YANG <a href="">PRIMA,</a></strong> dan  <br><strong>MANAJEMEN <a href="">PROFESIONAL</a></strong>
          </h1></h3>
        </div>
      </div>
    </section>
    <section id="TentangKami" class="about section">

      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2><a href="TentangKami">Tentang Kami</a></h2>
        <!-- <p>Berikut ini adalah VISI dan MISI</p> -->
      </div><!-- End Section Title -->

      <div class="container section-title">
        <div class="row gy-8">
          
          <!-- Kolom Visi -->
          <div class="col-lg-7 ">
            <div class="content aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
              <h3>VISI</h3>
              <p></p>
              <h5>Terwujudnya Penyedia Utama Air Bersih dengan Kualitas Pelayanan yang Prima dan Manajemen Profesional.</h4>
                <!-- Kolom Misi -->
              <h3 class="mt-4">MISI</h3>
              <table class="table">
                <tbody>
                  <tr>
                    <th><i class="bi bi-check2-circle"></i></th>
                    <td><h6>Mewujudkan tercapainya Pemulihan Biaya Penuh (full cost recovery).</h5></td>
                  </tr>
                  <tr>
                    <th><i class="bi bi-check2-circle"></i></th>
                    <td><h6>Meningkatkan Kualitas, Kuantitas dan Kontinuitas Produksi serta Distribusi Air Bersih untuk Memenuhi Kebutuhan Masyarakat.</h5></td>
                  </tr>
                  <tr>
                    <th><i class="bi bi-check2-circle"></i></th>
                    <td><h6>Meningkatkan Cakupan Pelayanan Air Bersih di Wilayah Kota Sukabumi dan sekitarnya sampai dengan minimal 16,46% serta Menurunkan Tingkat Kehilangan Air sampai dengan kisaran 67% pada tahun 2026.</h5></td>
                  </tr>
                  <tr>
                    <th><i class="bi bi-check2-circle"></i></th>
                    <td><h6>Menciptakan pelayanan yang profesional dan berorientasi terhadap kepuasan pelanggan.</h5></td>
                  </tr>
                  <tr>
                    <th><i class="bi bi-check2-circle"></i></th>
                    <td><h6>Membangun Sumber Daya Manusia Karyawan PERUMDAM Tirta Bumi Wibawa Kota Sukabumi yang Profesional dan Kompeten.</h5></td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
      
          <!-- Kolom Gambar -->
          <div class="col-lg-5 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-18 margin-left-12">
                <img src="assets_frontend/BizPage/assets/img/direkturA.png" class="img-right" alt="">
                <p><strong>Sani S.S Prawirakoesoema, S.T.,M.Eng</strong></p>
                <p><strong>DIREKTUR</strong></p>
              </div>
            </div>
          </div>
      
        </div>
      </div>
      

    </section>
    
    <section id="stats" class="stats section dark-background">
  <div class="container section-title" data-aos="fade-up">
    <h2><a href="#stats">Statistik</a></h2>
  </div>
  
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">

      <?php if(isset($statistik) && !empty($statistik)): ?>
        <?php foreach($statistik as $s): ?>

        <!-- Stats Pelanggan -->
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <a href=""><i class="bi bi-person-circle fs-1 mb-3"></i></a> <!-- Ikon orang -->
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $s->jumlah_pelanggan; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pelanggan</p>
          </div>
        </div><!-- End Stats Item -->

        <!-- Stats Area Pelayanan -->
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <a href=""><i class="bi bi-house-door fs-1 mb-3"></i></a> <!-- Ikon rumah -->
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $s->area_pelayanan; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Area Pelayanan</p>
          </div>
        </div><!-- End Stats Item -->

        <!-- Stats Produksi Air -->
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <a href=""><i class="bi bi-droplet fs-1 mb-3"></i></a> <!-- Ikon air -->
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $s->jumlah_produksi_air; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Produksi Air (Liter/detik)</p>
          </div>
        </div><!-- End Stats Item -->

        <!-- Stats Kehilangan Air -->
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <a href=""><i class="bi bi-droplet fs-1 mb-3"></i></a> <!-- Ikon air -->
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $s->kehilangan_air; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Kehilangan Air</p>
          </div>
        </div><!-- End Stats Item -->

        <?php endforeach; ?>
      <?php else: ?>
        <p>Data statistik belum tersedia.</p>
      <?php endif; ?>

    </div>
  </div>
</section>

    

    <!-- Stats Section -->

  
    
    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Layanan  -->
      <div class="container section-title" data-aos="fade-up">
        <h2><a href="#">Layanan Kami</a></h2>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4">
      
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-person-plus icon flex-shrink-0"></i> <!-- Ikon untuk Pasang Baru -->
              <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Pasang Baru</a></h4>
                <p class="description">Layanan pasang baru dengan cara menghubungi <br>
                  <strong>layanan call center :
                    <a href="">0811-8111-530</a></strong></p>
              </div>
            </div>
          </div><!-- End Service Item -->
      
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-speedometer2 icon flex-shrink-0"></i> <!-- Ikon untuk Ganti Meter -->
              <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Ganti Meter</a></h4>
                <p class="description">Pergantian meter secara berkala dan pergantian meter rusak serta tera meter terjadwal memastikan akurasi pemakaian pelanggan sesuai dengan catatan pembaca meter</p>
              </div>
            </div>
          </div><!-- End Service Item -->
      
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-truck icon flex-shrink-0"></i> <!-- Ikon untuk Mobil Tangki -->
              <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Mobil Tangki</a></h4>
                <p class="description">Pelayanan pengiriman air melalui mobil tangki untuk keperluan Pelanggan Non Meter dan Subsidi untuk Pelanggan yang terimbas Perbaikan Kebocoran</p>
              </div>
            </div>
          </div><!-- End Service Item -->
      
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-chat-square-dots icon flex-shrink-0"></i> <!-- Ikon untuk Portal Pengaduan -->
              <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Portal Pengaduan</a></h4>
                <p class="description">Portal Pengaduan Pelanggan dari semua jalur aduan terdata dalam sistem satu pintu.</p>
              </div>
            </div>
          </div><!-- End Service Item -->
      
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-pencil-square icon flex-shrink-0"></i> <!-- Ikon untuk Balik Nama -->
              <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Balik Nama</a></h4>
                <p class="description">Pelayanan Balik Nama Identitas Pelanggan untuk Rumah, Instansi atau Bisnis yang berganti kepemilikan.</p>
              </div>
            </div>
          </div><!-- End Service Item -->
      
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-wallet2 icon flex-shrink-0"></i> <!-- Ikon untuk Pembayaran Online -->
              <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Pembayaran Online</a></h4>
                <p class="description">Pembayaran tagihan rekening air pelanggan dengan beragam metode pembayaran</p>
              </div>
            </div>
          </div><!-- End Service Item -->
      
        </div>
      </div>
      

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <!-- <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/cta-bg.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Call To Action</h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="cta-btn" href="#">Call To Action</a>
            </div>
          </div>
        </div>
      </div>

    </section>/Call To Action Section -->

    <!-- Portfolio Section -->


    <!-- Testimonials Section -->
    <!-- /Testimonials Section -->

    
    <!-- /Pricing Section -->

    <!-- Faq Section -->
    <!-- /Faq Section -->
    <!-- Form Cek Tagihan -->
    <section id="services" class="services section light-background">
    <div class="container section-title " data-aos="fade-up">
      <h2><a href="#services">Cek Tagihan Saya</a></h2>
      <p class="description">Layanan Informasi Pembayaran dengan cara menghubungi <br>
        <strong>layanan call center :
          <a href="">0811-8111-530</a></strong></p>
    </div>
    <div class="container">
      <div class="row form-container" id="form-container">
        <!-- Form Cek Tagihan -->
        <div class="col-md-6" id="cek-tagihan-form">
          <form method="post" class="php-check-bill-form" data-aos="fade-up" data-aos-delay="300" id="cekTagihanForm">
            <div class="row gy-4">
              <div class="col-md-12 text-center">
                <h3 class="form-heading">Cek Tagihan Air Anda Disini</h3>
                <p class="form-description">Masukkan nomor pelanggan Anda untuk melihat tagihan air.</p>
              </div>
    
              <div class="col-md-12">
                <label for="no-pelanggan" class="form-label">Masukkan 6 Digit No. Pelanggan</label>
                <input type="text" id="no-pelanggan" name="no_pelanggan" class="form-control input-field" placeholder="No. Pelanggan" pattern="\d{6}" required>
              </div>
    
              <div class="col-md-12">
                <div class="g-recaptcha recaptcha-center" data-sitekey="YOUR_SITE_KEY"></div>
              </div>
    
              <div class="col-md-12 text-center">
                <button type="button" class="btn-submit" onclick="showOutput()">Kirim</button>
              </div>
            </div>
          </form>
        </div>
    
        <!-- Form Output (Initially Hidden) -->
        <div class="col-md-6" id="output-form" style="display: none;">
          <div class="output-form" data-aos="fade-up" data-aos-delay="300">
            <div class="row gy-4">
              <div class="col">
                <h3 class="form-heading">Hasil Cek Tagihan</h3>
              </div>
              <div class="col-md-12">
                <table>
                  <tr><th>Nama</th><td>=</td><td>....</td></tr>
                  <tr><th>Alamat</th><td>=</td><td>....</td></tr>
                  <tr><th>RT/RW</th><td>=</td><td>....</td></tr>
                  <tr><th>Kelurahan</th><td>=</td><td>....</td></tr>
                  <tr><th>Golongan</th><td>=</td><td>....</td></tr>
                </table>
              </div>
              <div class="col-md-12">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Periode</th>
                      <th>Pemakaian (m<sup>3</sup>)</th>
                      <th>Total Tagihan</th>
                      <th>Tanggal Bayar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>...</td>
                      <td>...</td>
                      <td>...</td>
                      <td>...</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-12 text-end">
                <p><strong>Total Belum Terbayar:</strong>...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    </section>

    <!-- Team Section -->

    <section id="team" class="team section mt-4 ">
      <div class="container section-title" data-aos="fade-up">
        <h2><a href="#team">Daftar mitra</a></h2>
      </div>
      
      <!-- End Section Title -->
      <div class="container section-image-title">
        <p style="color: #333333;"><strong>Daftar mitra Bank</strong></p>
      </div>
      <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="container">
              <div class="row gy-8">
                <div class="col-lg-2 col-md-4">
                  <div class="member border border-black-500 rounded-3 p-2">
                    <img src="assets_frontend/BizPage/assets/img/bank/Bca.png" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Bank BCA</h4>
                        <span>Bank Central Asia</span>
                        <!-- <div class="social">
                          <a href=""><i class="bi bi-twitter-x"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4">
                  <div class="member border border-black-500 rounded-3 p-2">
                    <img src="assets_frontend/BizPage/assets/img/bank/Bjb.png" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Bank BJB</h4>
                        <span>Bank Pembangunan Daerah Jawa Barat dan Banten Syariah Tbk</span>
                        <!-- <div class="social">
                          <a href=""><i class="bi bi-twitter-x"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4">
                  <div class="member border border-black-500 rounded-3 p-2">
                    <img src="assets_frontend/BizPage/assets/img/bank/BjbSyariah.png" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Bank BJB Syariah</h4>
                        <span>Bank Pembangunan Daerah Jawa Barat dan Banten Syariah Tbk</span>
                        <!-- <div class="social">
                          <a href=""><i class="bi bi-twitter-x"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4">
                  <div class="member border border-black-500 rounded-3 p-2">
                    <img src="assets_frontend/BizPage/assets/img/bank/Bni.png" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Bank BNI</h4>
                        <span>Bank Negara Indonesia</span>
                        <!-- <div class="social">
                          <a href=""><i class="bi bi-twitter-x"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-2 col-md-4">
                  <div class="member border border-black-500 rounded-3 p-2">
                    <img src="assets_frontend/BizPage/assets/img/bank/Bri.png" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Bank BRI</h4>
                        <span>Bank Rakyat Indonesia</span>
                        <!-- <div class="social">
                          <a href=""><i class="bi bi-twitter-x"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4">
                  <div class="member border border-black-500 rounded-3 p-2">
                    <img src="assets_frontend/BizPage/assets/img/bank/Btn.png" class="img-fluid" alt="">
                    <div class="member-info">
                      <div class="member-info-content">
                        <h4>Bank BTN</h4>
                        <span>Bank Tabungan Negara</span>
                        <!-- <div class="social">
                          <a href=""><i class="bi bi-twitter-x"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>

      
              </div>
            </div>
          </div>
      
          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="container">
              <div class="row gy-8">
                <!-- Tambahkan item lain di sini jika diperlukan -->
                <div class="col-lg-2 col-md-4">
                    <div class="member border border-black-500 rounded-3 p-2">
                      <img src="assets_frontend/BizPage/assets/img/bank/Mandiri.png" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4>Bank Mandiri</h4>
                          <span>PT Bank Mandiri Tbk</span>
                          <!-- <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                          </div> -->
                        </div>
                      </div>
                    </div>
                </div>
  
                
              </div>
            </div>
          </div>
          
      
        </div>
      
        <!-- Carousel controls -->

      </div>
    <!-- Baris ke 2 -->
    <div class="container section-image-title">
      <p style="color: #333333;"><strong>Daftar mitra E Commerce</strong></p>
    </div><!-- End Section Title -->
    <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="container">
            <div class="row gy-8">
              <div class="col-lg-2 col-md-4">
                <div class="member border border-black-500 rounded-3 p-2">
                  <img src="assets_frontend/BizPage/assets/img/ecommerce/Bukalapak.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Bukalapak</h4>
                      <span>Pt. Bukalapak.Com Tbk</span>
                      <!-- <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-2 col-md-4">
                <div class="member border border-black-500 rounded-3 p-2">
                  <img src="assets_frontend/BizPage/assets/img/ecommerce/Dana.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Dana</h4>
                      <span>Layanan Keuangan Digital</span>
                      <!-- <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-2 col-md-4">
                <div class="member border border-black-500 rounded-3 p-2">
                  <img src="assets_frontend/BizPage/assets/img/ecommerce/Gopay.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>GoPay</h4>
                      <span>PT Dompet Anak Bangsa</span>
                      <!-- <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-2 col-md-4">
                <div class="member border border-black-500 rounded-3 p-2">
                  <img src="assets_frontend/BizPage/assets/img/ecommerce/Link.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Link Aja</h4>
                      <span>PT Fintek Karya Nusantara</span>
                      <!-- <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-md-4">
                <div class="member border border-black-500 rounded-3 p-2">
                  <img src="assets_frontend/BizPage/assets/img/ecommerce/Ovo.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>OVO</h4>
                      <span>PT Visionet Internasional</span>
                      <!-- <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-2 col-md-4">
                <div class="member  border border-black-500 rounded-3 p-2">
                  <img src="assets_frontend/BizPage/assets/img/ecommerce/Pospay.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Pospay</h4>
                      <span>PT Pos Indonesia</span>
                      <!-- <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="container">
            <div class="row gy-8">
              <!-- Tambahkan item lain di sini jika diperlukan -->
              <div class="col-lg-2 col-md-4">
                <div class="member border border-black-500 rounded-3 p-2">
                  <img src="assets_frontend/BizPage/assets/img/ecommerce/Shopee.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Shopee Pay</h4>
                      <span>PT SeaMoney Indonesia</span>
                      <!-- <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-2 col-md-4">
                <div class="member  border border-black-500 rounded-3 p-2">
                  <img src="assets_frontend/BizPage/assets/img/ecommerce/Tokped.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Tokopedia</h4>
                      <span>PT Tokopedia</span>
                      <!-- <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-2 col-md-4">
                <div class="member  border border-black-500 rounded-3 p-2">
                  <img src="assets_frontend/BizPage/assets/img/ecommerce/Indomaret.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Indomaret</h4>
                      <span>PT Indomarco Prismatama</span>
                      <!-- <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-2 col-md-4">
                <div class="member   border border-black-500 rounded-3 p-2">
                  <img src="assets_frontend/BizPage/assets/img/ecommerce/Alfamaret.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Alfamart</h4>
                      <span>PT Sumber Alfaria Trijaya Tbk</span>
                      <!-- <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-md-4">
                <div class="member   border border-black-500 rounded-3 p-2">
                  <img src="assets_frontend/BizPage/assets/img/ecommerce/wallet.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Wallet Link</h4>
                      <span><a href="https://wa.link/8xw93c">Perumda TBW Kota Sukabumi</a></span>
                      <!-- <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            

              
            </div>
          </div>
        </div>
    
      </div>
    
      <!-- Carousel controls -->
    </div>
      

    </section>
   


    <section id="berita" class="blog-posts section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2><a href="#team">Berita Terbaru</a></h2>
        <!-- <div class="read-more">
          <a href="blog-details.html">Semua Berita</a>
        </div> -->
        
      </div>
      <div class="container">
        <div class="row gy-4">
          <?php foreach($artikel as $a){ ?>
            <div class="col-lg-4">
              <article class="d-flex flex-column">

                <div class="post-img">
                  <?php if($a->artikel_sampul != ""){ ?>
                    <img src="<?php echo base_url(); ?>gambar/artikel/<?php echo $a->artikel_sampul ?>" alt="<?php echo $a->artikel_judul ?>" class="img-fluid">
                  <?php } ?>
                </div>

                <h2 class="title">
                  <a href="<?php echo base_url().$a->artikel_slug ?>"><?php echo $a->artikel_judul ?></a>
                </h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html"><?php echo $a->pengguna_nama ?></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><?php echo $a->artikel_tanggal ?></a></li>
                  </ul>
                </div>

                <div class="read-more mt-auto align-self-end">
                  <a href="blog-details.html">Read More</a>
                </div>

              </article>
            </div><!-- End post list item -->
          <?php } ?>

        </div>
        
      </div>
    </section><!-- /Team Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">10</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>

    </section><!-- /Blog Pagination Section -->

    

    <!-- Contact Section -->
    <!-- /Contact Section -->

  