<!--/ Intro Skew Start /-->
<div class="page-title dark-background" data-aos="fade" style="background-image: url(<?php echo base_url(); ?>assets_frontend/BizPage/assets/img/hero-carousel/FotoAA.png);">
  <div class="container position-relative">
    <h1><?php echo $artikel[0]->artikel_judul; ?></h1>
    
    <nav class="breadcrumbs">
      <ol>
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li class="current">Berita / <?php echo $artikel[0]->artikel_judul; ?></li>
      </ol>
    </nav>
  </div>
</div>
<!--/ Intro Skew End /-->



<!--/ Blog-Single Section Start /-->
<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <!-- Blog Details Section -->
      <section id="blog-details" class="blog-details section">
        <div class="container">

          <?php if(count($artikel) == 0){ ?>
          <center>
            <h3 class="mt-5">Artikel Tidak Ditemukan.</h3>
          </center>
          <?php } ?>

          <?php foreach($artikel as $a){ ?>
          <article class="article">
            <!-- Post Thumbnail -->
            <div class="post-img">
              <?php if($a->artikel_sampul != ""){ ?>
              <img src="<?php echo base_url(); ?>gambar/artikel/<?php echo $a->artikel_sampul ?>" alt="<?php echo $a->artikel_judul ?>" class="img-fluid">
              <?php } ?>
            </div>

            <!-- Article Title -->
            <h2 class="title"><?php echo $a->artikel_judul ?></h2>

            <!-- Meta Info -->
            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?php echo $a->pengguna_nama ?></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-pricetag"></i> <a href="#"><?php echo $a->kategori_nama ?></a></li>
              </ul>
            </div>

            <!-- Article Content -->
            <div class="content">
              <?php echo $a->artikel_konten ?>
            </div>
          </article>
          <?php } ?>

        </div>
      </section>
    </div>

    <!-- Sidebar -->
    <div class="col-lg-4">
      <?php $this->load->view('frontend/v_sidebar'); ?>
    </div>
  </div>
</div>
<!--/ Blog-Single Section End /-->

  <!--/ Section Blog-Single End /-->