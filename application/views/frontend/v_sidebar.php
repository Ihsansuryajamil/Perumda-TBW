<div class="container">
  <div class="row">

    
      <div class="col-lg-12 sidebar">

        <div class="widgets-container">

          <!-- Search Widget -->
          <!-- <div class="search-widget widget-item">
            <h3 class="widget-title">Search</h3>
            <?php echo form_open(base_url().'search'); ?>
            <input type="text" class="form-control" name="cari" placeholder="Search for...">
            <button type="submit" class="btn btn-secondary">
              <i class="bi bi-search"></i>
            </button>
            </form>
          </div> -->
          <!-- /Search Widget -->

          <!-- Recent Articles Widget -->
          <div class="recent-posts-widget widget-item">
            <h3 class="widget-title">Artikel Terbaru</h3>
            <ul class="mt-3">
              <?php 
              $artikel = $this->db->query("SELECT * FROM artikel,pengguna,kategori WHERE artikel_status='publish' AND artikel_author=pengguna_id AND artikel_kategori=kategori_id ORDER BY artikel_id DESC LIMIT 10")->result();
              foreach($artikel as $a){
                ?>
                <li><strong><a href="<?php echo base_url().$a->artikel_slug; ?>"><?php echo $a->artikel_judul; ?></a></strong></li>
                <?php
              }
              ?>
            </ul>
          </div><!-- /Recent Articles Widget -->

          <!-- Pages Widget -->
          <!-- <div class="categories-widget widget-item">
            <h3 class="widget-title">Halaman</h3>
            <ul class="mt-3">
              <?php 
              $halaman = $this->m_data->get_data('halaman')->result();
              foreach($halaman as $h){
                ?>
                <li><a href="<?php echo base_url().'page/'.$h->halaman_slug; ?>"><?php echo $h->halaman_judul; ?></a></li>
                <?php
              }
              ?>
            </ul>
          </div>/Pages Widget -->

          <!-- Categories Widget -->
          <!-- <div class="tags-widget widget-item">
            <h3 class="widget-title">Kategori</h3>
            <ul class="mt-3">
              <?php 
              $kategori = $this->m_data->get_data('kategori')->result();
              foreach($kategori as $k){
                ?>
                <li><a href="<?php echo base_url().'kategori/'.$k->kategori_slug; ?>"><?php echo $k->kategori_nama; ?></a></li>
                <?php
              }
              ?>
            </ul>
          </div> -->
          <!-- /Categories Widget -->

        </div>

      </div>
    
  </div>
</div>
