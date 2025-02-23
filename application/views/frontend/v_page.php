<main class="main">

  <!-- Page Title -->
  <div class="page-title dark-background" data-aos="fade" style="background-image: url(<?php echo base_url(); ?>assets_frontend/BizPage/assets/img/hero-carousel/FotoAA.png);">
    <div class="container position-relative">
      <h1><?php echo $halaman[0]->halaman_judul; ?></h1> <!-- Mengambil judul dari $halaman -->
      <!-- <p><?php echo substr(strip_tags($halaman[0]->halaman_konten), 0, 150) . '...'; ?></p>  -->
      <!-- Menampilkan ringkasan dari konten -->
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="current">Halaman / <?php echo $halaman[0]->halaman_judul; ?></li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Blog Posts Section -->
  <section id="blog-posts" class="blog-posts section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <?php if(count($halaman) == 0){ ?>
          <center>
            <h3 class="mt-5 mb-5">Halaman Ini Tidak Ditemukan.</h3>
          </center>
        <?php } else { ?>

          <?php foreach($halaman as $a){ ?>
            <div class="post-box mb-5"> <!-- Menggunakan style post-box seperti pada contoh kedua -->

              <div class="post-meta">
                <center>
                  <h1 class="article-title"><?php echo $a->halaman_judul ?></h1> <!-- Gunakan judul besar -->
                </center>
                <br/>
              </div>

              <div class="post-img">
                <img src="<?php echo base_url('path/to/default-image.jpg'); ?>" alt="" class="img-fluid"> <!-- Placeholder gambar -->
              </div>
              <br/>

              <!-- <div class="meta-top text-center">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> Admin</li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> 
                    <time datetime="2022-01-01"><?php echo date('M d, Y', strtotime($a->created_at)); ?></time>
                  </li>
                </ul>
              </div> -->

              <div class="article-content mt-3">
                <?php echo $a->halaman_konten ?>
              </div>

            </div>
          <?php } ?>

        <?php } ?>

      </div>
    </div>
  </div>
</section>
<!-- /Blog Posts Section -->

</main>
