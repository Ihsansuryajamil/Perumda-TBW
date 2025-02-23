
<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        
        <!-- Bagian Perusahaan dan Logo -->
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="<?php echo base_url().'/gambar/website/'.$pengaturan->logo; ?>" height="50">
            <h4 class="sitename"><?php echo $pengaturan->nama ?></h4>
          </a>
          <!-- <div>
            <h6 class="footer-text">Jam Pelayanan :</h6>
            <table>
              <tr><th><i class="bi bi-clock"></i> Senin - Jum'at </th><td>=</td><td><a href="#"> 07.30 s/d 16.00</a></td></tr>
              <tr><th><i class="bi bi-clock"></i> </th><td>=</td><td><a href="#"> 07.00 s/d 10.30</a></td></tr>
            </table>
        
          </div> -->
          <div class="social-links d-flex mt-4">
            <a href="<?php echo $pengaturan->link_twitter ?>"><i class="bi bi-twitter-x"></i></a>
            <a href="<?php echo $pengaturan->link_facebook ?>"><i class="bi bi-facebook"></i></a>
            <a href="<?php echo $pengaturan->link_instagram ?>"><i class="bi bi-instagram"></i></a>
            <a href="<?php echo $pengaturan->link_github ?>"><i class="bi bi-github"></i></a>
          </div>
        </div>
  
        <!-- Bagian Kontak -->
        <div class="col-lg-8 col-md-6 footer-links">
          <h4>Kontak Kami</h4>
          <ul class="d-flex justify-content-between align-items-start flex-wrap">
            
            <!-- Lokasi -->
            <li>
              <div>
                <h6 class="footer-text">Lokasi :</h6>
                <a href="#"><?php echo $pengaturan->lokasi_perusahaan; ?></a>

              </div>
            </li>
  
            <!-- Telepon -->
            <li>
              <div>
                <h6 class="footer-text">Telepon :</h6>
                <a href="https://wa.me/<?php echo $pengaturan->no_telp_perusahaan; ?>"><?php echo $pengaturan->no_telp_perusahaan; ?></a>
              </div>
            </li>
  
            <!-- Email -->
            <li>
              <div>
                <h6 class="footer-text">Alamat Email :</h6>
                <a href="#"><?php echo $pengaturan->email_perusahaan; ?></a>
              </div>
            </li>
  
            <!-- Jam Pelayanan -->
            
  
          </ul>
          <ul>
            <li>
              <div>
                <h6 class="footer-text">Jam Pelayanan :</h6>
                <table>
                  <tr><th><i class="bi bi-clock"></i> Senin - Jum'at </th><td>=</td><td><a href="#"><?php echo $pengaturan->jam_pelayanan; ?></a></td></tr>
                  <!-- <tr><th><i class="bi bi-clock"></i> </th><td>=</td><td><a href="#"> 07.00 s/d 10.30</a></td></tr> -->
                </table>
            
              </div>
            </li>
          </ul>
        </div>
  
      </div>
    </div>
  </footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?php echo base_url(); ?>assets_frontend/BizPage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets_frontend/BizPage/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo base_url(); ?>assets_frontend/BizPage/assets/vendor/aos/aos.js"></script>
<script src="<?php echo base_url(); ?>assets_frontend/BizPage/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?php echo base_url(); ?>assets_frontend/BizPage/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets_frontend/BizPage/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets_frontend/BizPage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets_frontend/BizPage/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="<?php echo base_url(); ?>assets_frontend/BizPage/assets/js/main.js"></script>
<script>
  function showOutput() {
// Tampilkan form output
document.getElementById("output-form").style.display = "block";

// Pindahkan form cek tagihan ke kiri
document.getElementById("form-container").classList.add("expanded");
}

  document.querySelector('.php-check-bill-form').addEventListener('submit', function(e) {
e.preventDefault();

// Simpan logika untuk menampilkan form output
document.querySelector('.form-container').classList.remove('initial-state');
document.querySelector('.form-container').classList.add('active-state');
});


</script>

</body>

</html>

