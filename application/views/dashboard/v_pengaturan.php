<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Pengaturan
			<small>Update Pengaturan Website</small>
		</h1>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-lg-6">
				
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Pengaturan</h3>
					</div>
					<div class="box-body">

						<?php 
						if(isset($_GET['alert'])){
							if($_GET['alert'] == "sukses"){
								echo "<div class='alert alert-success'>Pengaturan telah diupdate!</div>";
							}
						}
						?>
						
						<?php foreach($pengaturan as $p){ ?>

							<form method="post" action="<?php echo base_url('index.php/dashboard/pengaturan_update') ?>" enctype="multipart/form-data">
								<div class="box-body">
									<div class="form-group">
										<label>Nama Website</label>
										<input type="text" name="nama" class="form-control" placeholder="Masukkan nama website.." value="<?php echo $p->nama; ?>">
										<?php echo form_error('nama'); ?>
									</div>

									<div class="form-group">
										<label>Deskripsi Website</label>
										<input type="text" name="deskripsi" class="form-control" placeholder="Masukkan deskripsi .." value="<?php echo $p->deskripsi; ?>">
										<?php echo form_error('deskripsi'); ?>
									</div>

									<hr>

									<div class="form-group">
										<label>Logo Website</label>
										<input type="file" name="logo">
										<small>Kosongkan jika tidak ingin mengubah logo</small>
									</div>

									<hr>

									<div class="form-group">
										<label>Kontak Perusahaan</label>

										<h5>Lokasi Perusahaan</h5>
										<input type="text" name="lokasi_perusahaan" class="form-control" placeholder="Masukkan lokasi perusahaan .." value="<?php echo $p->lokasi_perusahaan; ?>">
    									<?php echo form_error('lokasi_perusahaan'); ?>

										<h5>No Telepon Perusahaan</h5>
										<input type="text" name="no_telp_perusahaan" class="form-control" placeholder="Masukkan no telephone perusahaan .." value="<?php echo $p->no_telp_perusahaan; ?>">
    									<?php echo form_error('no_telp_perusahaan'); ?>

										<h5>Email Perusahaan</h5>
										<input type="text" name="email_perusahaan" class="form-control" placeholder="Masukkan email perusahaan .." value="<?php echo $p->email_perusahaan; ?>">
    									<?php echo form_error('email_perusahaan'); ?>
										
										<h5>Jam Pelayanan</h5>
										<input type="text" name="jam_pelayanan" class="form-control" placeholder="Masukkan jam pelayanan.." value="<?php echo $p->jam_pelayanan; ?>">
										<?php echo form_error('jam_pelayanan'); ?>
									</div>

									<hr>

									<div class="form-group">
										<label>Link Facebook</label>
										<input type="text" name="link_facebook" class="form-control" placeholder="Masukkan link facebook .." value="<?php echo $p->link_facebook; ?>">
										<?php echo form_error('link_facebook'); ?>
									</div>

									<div class="form-group">
										<label>Link Twitter</label>
										<input type="text" name="link_twitter" class="form-control" placeholder="Masukkan link_twitter .." value="<?php echo $p->link_twitter; ?>">
										<?php echo form_error('link_twitter'); ?>
									</div>

									<div class="form-group">
										<label>Link Instagram</label>
										<input type="text" name="link_instagram" class="form-control" placeholder="Masukkan link_instagram .." value="<?php echo $p->link_instagram; ?>">
										<?php echo form_error('link_instagram'); ?>
									</div>

									<div class="form-group">
										<label>Link Github</label>
										<input type="text" name="link_github" class="form-control" placeholder="Masukkan link_github .." value="<?php echo $p->link_github; ?>">
										<?php echo form_error('link_github'); ?>
									</div>
								</div>

								<div class="box-footer">
									<input type="submit" class="btn btn-success" value="Simpan">
								</div>
							</form>

						<?php } ?>

					</div>
				</div>

			</div>
		</div>

	</section>

</div>