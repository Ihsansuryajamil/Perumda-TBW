<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Update
            <small>Update Daftar Mitra</small>
        </h1>
    </section>

    <section class="content">

        <a href="<?php echo base_url().'index.php/dashboard/mitra'; ?>" class="btn btn-sm btn-primary">Kembali</a>

        <br/>
        <br/>

        <?php foreach($mitra as $m){ ?>

        <form method="post" action="<?php echo base_url('index.php/dashboard/mitra_update') ?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-9">

                    <div class="box box-primary">
                        <div class="box-body">

                            <div class="box-body">
                                <div class="form-group">
                                    <label>Nama Mitra</label>
                                    <input type="hidden" name="id" value="<?php echo $m->mitra_id; ?>">
                                    <input type="text" name="nama_mitra" class="form-control" placeholder="Masukkan nama mitra.." value="<?php echo $m->nama_mitra; ?>">
                                    <br/>
                                    <?php echo form_error('nama_mitra'); ?>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <?php echo form_error('deskripsi'); ?>
                                    <br/>
                                    <textarea class="form-control" name="deskripsi" placeholder="Masukkan deskripsi mitra.."> <?php echo $m->deskripsi; ?> </textarea>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-3">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori">
                                
                                    <option value="">- Pilih Kategori</option>
                                    <option value="E-Commerce" <?php echo set_select('kategori', 'a'); ?>>Mitra E-Commerce</option>
                                    <option value="Bank" <?php echo set_select('kategori', 'b'); ?>>Mitra Bank</option>
                                
                                </select>
                                <br/>
                                <?php echo form_error('kategori'); ?>
                            </div>

                            <br/><br/>

                            <div class="form-group">
                                <label>Gambar Mitra</label>

                                <input type="file" name="gambar">

                                <br/>
                                <?php 
                                if(isset($gambar_error)){
                                    echo $gambar_error;
                                }
                                ?>
                                <?php echo form_error('gambar'); ?>

                                <img src="<?php echo base_url().'/gambar/artikel/'.$m->gambar; ?>" style="width:100px;">
                            </div>

                            <br/><br/>

                            <input type="submit" name="status" value="Simpan" class="btn btn-success btn-block">

                        </div>
                    </div>

                </div>
            </div>
        </form>
        <?php } ?>

    </section>

</div>
