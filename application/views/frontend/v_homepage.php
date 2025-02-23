<main class="main">

    <!-- Hero Section -->
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
    <section id="pricing" class="pricing section green-background" style="padding-bottom: 0px;  background-image: url('assets_frontend/BizPage/assets/img/cta2.png'); background-size: cover; background-position: center;">
    <!-- <img src="assets_frontend/BizPage/assets/img/cta-bg.jpg" alt="" class="pricing img-fluid"> -->
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-10">
        <div class="text-center">
          <h2 class="cta-heading">Layanan Pelanggan</h3>
         
          <p class="description">
            Layanan Informasi Pembayaran dengan cara menghubungi <br> layanan call center :
            <strong>
              <a style="text-align: center; color: #ffff;" href="https://wa.me/628118111530"><i class="bi bi-whatsapp"></i> 0811-8111-530</a>
            </strong>
          </p>
          
          <a style="display: inline-block; margin: 10px; padding: 10px 20px; font-size: 16px; font-weight: bold; color: #fff; background-color: #18d26e; border: none; border-radius: 10px; text-decoration: none; transition: all 0.3s ease;" class="buy-btn mb-2" href="https://bit.ly/4h8AswB"> Pengaduan Pelanggan</a>
          <!-- <hr> -->
        </div>
      </div>
    </div>
    <div class="container d-flex justify-content-center mt-10" data-aos="zoom-in" data-aos-delay="100">
      <div class="row g-2 justify-content-center">
        
        <div class="col-lg-10">
        <div style="border:#000 2px solid #18d26e; border-radius: 20px; padding: 20px; background-color: #f8f9fa; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
            <h5 style="text-align: center; color: #000;">Cek Tagihan Air Anda Disini</h3>
            <div style="text-center">
              <a class="cta-btn" href="https://bit.ly/Infopelanggantbw" style="display: inline-block; margin: 10px; padding: 10px 20px; font-size: 16px; font-weight: bold; color: #fff; background-color: #18d26e; border: none; border-radius: 10px; text-decoration: none; transition: all 0.3s ease;">
                <i class="bi bi-search"></i> Info Pelanggan
              </a>
              <a class="cta-btn" href="https://wa.link/fplk5n" style="display: inline-block; margin: 10px; padding: 10px 20px; font-size: 16px; font-weight: bold; color: #fff; background-color: #18d26e; border: none; border-radius: 10px; text-decoration: none; transition: all 0.3s ease;">
                <i class="bi bi-wallet2"></i> Bayar Tagihan
              </a>
            </div>
          </div>
          <hr>
        <p class="description">
            Scan QR dibawah ini, atau klik 
            <strong>
              <a href="https://bit.ly/3OMYSif">Unduh Mobile App</a>
            </strong> untuk meng-install aplikasi Info Pelanggan
          </p>
        <img src="assets_frontend/BizPage/assets/img/bit.ly_3OMYSif.png" width="35%" class="mb-3" alt="QR Code">
        <!-- <h3><a style="text-align: center; color: #fff;" href="https://bit.ly/3OMYSif">Unduh Mobile App</a></h3> -->
          
        </div>
      </div>
    </div>
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
                <h4 class="title"><a href="https://wa.link/fplk5n" class="stretched-link">Pasang Baru</a></h4>
                <p class="description">Layanan pasang baru dengan cara menghubungi <br>
                  <strong>layanan call center :
                    <a href="https://wa.link/fplk5n">0811-8111-530</a></strong></p>
              </div>
            </div>
          </div><!-- End Service Item -->
      
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-speedometer2 icon flex-shrink-0"></i> <!-- Ikon untuk Ganti Meter -->
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Ganti Meter</a></h4>
                <p class="description">Pergantian meter secara berkala dan pergantian meter rusak serta tera meter terjadwal memastikan akurasi pemakaian pelanggan sesuai dengan catatan pembaca meter</p>
              </div>
            </div>
          </div><!-- End Service Item -->
      
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-truck icon flex-shrink-0"></i> <!-- Ikon untuk Mobil Tangki -->
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Mobil Tangki</a></h4>
                <p class="description">Pelayanan pengiriman air melalui mobil tangki untuk keperluan Pelanggan Non Meter dan Subsidi untuk Pelanggan yang terimbas Perbaikan Kebocoran</p>
              </div>
            </div>
          </div><!-- End Service Item -->
      
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-chat-square-dots icon flex-shrink-0"></i> <!-- Ikon untuk Portal Pengaduan -->
              <div>
                <h4 class="title"><a href="https://wa.link/fplk5n" class="stretched-link">Portal Pengaduan</a></h4>
                <p class="description">Portal Pengaduan Pelanggan dari semua jalur aduan terdata dalam sistem satu pintu.</p>
              </div>
            </div>
          </div><!-- End Service Item -->
      
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-pencil-square icon flex-shrink-0"></i> <!-- Ikon untuk Balik Nama -->
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Balik Nama</a></h4>
                <p class="description">Pelayanan Balik Nama Identitas Pelanggan untuk Rumah, Instansi atau Bisnis yang berganti kepemilikan.</p>
              </div>
            </div>
          </div><!-- End Service Item -->
      
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-wallet2 icon flex-shrink-0"></i> <!-- Ikon untuk Pembayaran Online -->
              <div>
                <h4 class="title"><a href="https://wa.link/fplk5n" class="stretched-link">Pembayaran Online</a></h4>
                <p class="description">Pembayaran tagihan rekening air pelanggan dengan beragam metode pembayaran</p>
              </div>
            </div>
          </div><!-- End Service Item -->
      
        </div>
      </div>
      

    </section><!-- /Services Section -->
    <section id="stats" class="stats section light-background">
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

    <!-- Team Section -->
    <section id="team" class="team section mt-4">
    <div class="container section-title" data-aos="fade-up">
        <h2><a href="#team">Daftar mitra</a></h2>
    </div>

    <!-- Section for Bank -->
    <div class="container section-image-title">
        <p style="color: #333333;"><strong>Daftar mitra Bank</strong></p>
    </div>

    <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row gy-8">
                        <?php foreach (array_slice($mitra_bank, 0, 6) as $m) : ?> <!-- 6 items per slide -->
                            <div class="col-lg-2 col-md-4">
                                <div class="member border border-black-500 rounded-3 p-2">
                                    <img src="<?php echo base_url().'/gambar/artikel/'.$m->gambar; ?>" class="img-fluid" alt="<?= $m->nama_mitra; ?>">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4><?= $m->nama_mitra; ?></h4>
                                            <span><?= $m->deskripsi; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row gy-8">
                        <?php foreach (array_slice($mitra_bank, 6, 6) as $m) : ?> <!-- Next 6 items for second slide -->
                            <div class="col-lg-2 col-md-4">
                                <div class="member border border-black-500 rounded-3 p-2">
                                    <img src="<?php echo base_url().'/gambar/artikel/'.$m->gambar; ?>" class="img-fluid" alt="<?= $m->nama_mitra; ?>">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4><?= $m->nama_mitra; ?></h4>
                                            <span><?= $m->deskripsi; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- Add more slides as needed -->
        </div>

        <!-- Carousel controls -->
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
    </div>
    <div class="container section-image-title mt-5">
        <p style="color: #333333;"><strong>Daftar mitra E-Commerce dan PPOB</strong></p>
    </div>

    <div id="teamCarousel2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-inner">
    <!-- Slide 1 -->
      <div class="carousel-item active">
          <div class="container">
              <div class="row gy-8">
                  <?php foreach (array_slice($mitra_ecommerce, 0, 6) as $m) : ?>
                      <div class="col-lg-2 col-md-4">
                          <div class="member border border-black-500 rounded-3 p-2">
                              <img src="<?php echo base_url().'/gambar/artikel/'.$m->gambar; ?>" class="img-fluid" alt="<?= $m->nama_mitra; ?>">
                              <div class="member-info">
                                  <div class="member-info-content">
                                      <h4><?= $m->nama_mitra; ?></h4>
                                      <span><?= $m->deskripsi; ?></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  <?php endforeach; ?>
              </div>
          </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
          <div class="container">
              <div class="row gy-8">
                  <?php foreach (array_slice($mitra_ecommerce, 6, 6) as $m) : ?>
                      <div class="col-lg-2 col-md-4">
                          <div class="member border border-black-500 rounded-3 p-2">
                              <img src="<?php echo base_url().'/gambar/artikel/'.$m->gambar; ?>" class="img-fluid" alt="<?= $m->nama_mitra; ?>">
                              <div class="member-info">
                                  <div class="member-info-content">
                                      <h4><?= $m->nama_mitra; ?></h4>
                                      <span><?= $m->deskripsi; ?></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  <?php endforeach; ?>
              </div>
          </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
          <div class="container">
              <div class="row gy-8">
                  <?php foreach (array_slice($mitra_ecommerce, 12, 6) as $m) : ?>
                      <div class="col-lg-2 col-md-4">
                          <div class="member border border-black-500 rounded-3 p-2">
                              <img src="<?php echo base_url().'/gambar/artikel/'.$m->gambar; ?>" class="img-fluid" alt="<?= $m->nama_mitra; ?>">
                              <div class="member-info">
                                  <div class="member-info-content">
                                      <h4><?= $m->nama_mitra; ?></h4>
                                      <span><?= $m->deskripsi; ?></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  <?php endforeach; ?>
              </div>
          </div>
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item">
          <div class="container">
              <div class="row gy-8">
                  <?php foreach (array_slice($mitra_ecommerce, 18, 6) as $m) : ?>
                      <div class="col-lg-2 col-md-4">
                          <div class="member border border-black-500 rounded-3 p-2">
                              <img src="<?php echo base_url().'/gambar/artikel/'.$m->gambar; ?>" class="img-fluid" alt="<?= $m->nama_mitra; ?>">
                              <div class="member-info">
                                  <div class="member-info-content">
                                      <h4><?= $m->nama_mitra; ?></h4>
                                      <span><?= $m->deskripsi; ?></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  <?php endforeach; ?>
              </div>
          </div>
      </div>
  </div>

        <!-- Carousel controls -->
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
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
                  <!-- <a href="<?php echo base_url().$a->artikel_slug ?>"><?php echo $a->artikel_judul ?></a> -->
                  <a href="https://perumdatbwkotasukabumi.id/<?php echo $a->artikel_slug ?>"><?php echo $a->artikel_judul ?></a>
                </h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html"><?php echo $a->pengguna_nama ?></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><?php echo $a->artikel_tanggal ?></a></li>
                  </ul>
                </div>

                <div class="read-more mt-auto align-self-end">
                  <!-- <a href="blog-details.html">Read More</a> -->
                </div>

              </article>
            </div><!-- End post list item -->
          <?php } ?>

        </div>
        
      </div>
    </section><!-- /Team Section -->

    

    <!-- Contact Section -->
    <!-- /Contact Section -->

  