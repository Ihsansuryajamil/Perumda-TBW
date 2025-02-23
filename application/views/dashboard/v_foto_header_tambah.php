<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Tambah
            <small>Tambah Foto Header</small>
        </h1>
    </section>

    <section class="content">

        <a href="<?php echo base_url().'index.php/dashboard/foto_header'; ?>" class="btn btn-sm btn-primary">Kembali</a>

        <br/>
        <br/>

        <form method="post" action="<?php echo base_url('index.php/dashboard/foto_header_aksi') ?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-9">

                    <div class="box box-primary">
                        <div class="box-body">

                            <div class="box-body">
                                <div class="form-group">
                                    <label>Judul Foto Header</label>
                                    <input type="text" name="judul_foto_header" class="form-control" placeholder="Masukkan judul foto header.." value="<?php echo set_value('judul_foto_header'); ?>">
                                    <br/>
                                    <?php echo form_error('judul_foto_header'); ?>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <?php echo form_error('deskripsi'); ?>
                                    <br/>
                                    <textarea class="form-control" name="deskripsi" placeholder="Masukkan deskripsi foto header.."><?php echo set_value('deskripsi'); ?></textarea>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-3">
                    <div class="box box-primary">
                        <div class="box-body">

                            <br/>

                            <div class="form-group">
                                <label>Upload Gambar Header</label>
                                <input type="file" name="gambar">
                                <br/>
                                <?php 
                                if(isset($gambar_error)){
                                    echo $gambar_error;
                                }
                                ?>
                                <?php echo form_error('gambar'); ?>
                            </div>

                            <br/><br/>

                            <input type="submit" value="Simpan" class="btn btn-success btn-block">

                        </div>
                    </div>

                </div>
            </div>
        </form>

    </section>

</div>
