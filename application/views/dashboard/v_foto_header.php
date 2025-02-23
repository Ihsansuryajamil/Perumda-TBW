<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Update
            <small>Update Foto Header</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-lg-12">
                
                <a href="<?php echo base_url().'index.php/dashboard/foto_header_tambah'; ?>" class="btn btn-sm btn-primary">Tambah <strong>Foto baru</strong></a>

                <br/>
                <br/>

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Update Foto Header</h3>
                    </div>
                    <div class="box-body">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="9%">NO Urut Page</th>
                                        <th width="20%">Judul</th>
                                        <th>Deskripsi</th>
                                        <th width="30%">Gambar</th>
                                        <th width="15%">OPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach($fotoHeader as $fh){ 
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $fh->judul_foto_header; ?></td>
                                            <td><?php echo !empty($fh->deskripsi) ? $fh->deskripsi : 'Tidak ada deskripsi'; ?></td>
                                            <td><img width="100%" class="img-responsive" src="<?php echo base_url().'/gambar/artikel/'.$fh->gambar; ?>"></td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/dashboard/foto_header_edit/'.$fh->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="<?php echo base_url('index.php/dashboard/foto_header_hapus/'.$fh->id); ?>" class="btn btn-danger btn-sm">Hapus</a>

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
