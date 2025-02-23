<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Update
            <small>Update Daftar Mitra</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-lg-12">
                
                <a href="<?php echo base_url().'index.php/dashboard/mitra_tambah'; ?>" class="btn btn-sm btn-primary">Tambah <strong>Mitra Baru</strong></a>
                <a href="<?php echo base_url().'index.php/dashboard/kategori_mitra'; ?>" class="btn btn-sm btn-success">Tambah <strong>Kategori Baru</strong></a>

                <br/>
                <br/>

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Update Mitra</h3>
                    </div>
                    <div class="box-body">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="1%">NO</th>
                                        <th>Nama Mitra</th>
                                        <th>Deskripsi</th>
                                        <th width="10%">Gambar</th>
                                        <th>Kategori</th>
                                        <th width="15%">OPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach($mitra as $m){ 
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $m->nama_mitra; ?></td>
                                            <td><?php echo $m->deskripsi; ?></td>
                                            <td><img width="100%" class="img-responsive" src="<?php echo base_url().'/gambar/artikel/'.$m->gambar; ?>"></td>
                                            <td><?php echo $m->kategori; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/dashboard/mitra_edit/'.$m->mitra_id); ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="<?php echo base_url('index.php/dashboard/mitra_hapus/'.$m->mitra_id); ?>" class="btn btn-danger btn-sm">Hapus</a>

                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>

</div>
