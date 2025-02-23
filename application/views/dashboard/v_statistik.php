<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Update
			<small>Update Data Statistik</small>
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-lg-6">
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Update Data</h3>
					</div>
					<div class="box-body">

						<?php 
						if(isset($_GET['alert'])){
							if($_GET['alert'] == "sukses"){
								echo "<div class='alert alert-success'>Data statistik telah diupdate!</div>";
							}
						}
						?>
						
						<?php foreach($statistik as $s){ ?>
							<form method="post" action="<?php echo base_url('index.php/dashboard/statistik_update') ?>" enctype="multipart/form-data">
								<div class="box-body">
									<div class="form-group">
										<label>Jumlah Pelanggan</label>
										<input type="text" name="jumlah_pelanggan" class="form-control" placeholder="Masukkan jumlah pelanggan.." value="<?php echo $s->jumlah_pelanggan; ?>">
										<?php echo form_error('jumlah_pelanggan'); ?>
									</div>

									<div class="form-group">
										<label>Area Pelayanan</label>
										<input type="text" name="area_pelayanan" class="form-control" placeholder="Masukkan area pelayanan.." value="<?php echo $s->area_pelayanan; ?>">
										<?php echo form_error('area_pelayanan'); ?>
									</div>

									<div class="form-group">
										<label>Jumlah Produksi Air</label>
										<input type="text" name="jumlah_produksi_air" class="form-control" placeholder="Masukkan jumlah produksi air.." value="<?php echo $s->jumlah_produksi_air; ?>">
										<?php echo form_error('jumlah_produksi_air'); ?>
									</div>

                                    <div class="form-group">
										<label>Kehilangan Air</label>
										<input type="text" name="kehilangan_air" class="form-control" placeholder="Masukkan kehilangan air.." value="<?php echo $s->kehilangan_air; ?>">
										<?php echo form_error('kehilangan_air'); ?>
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
