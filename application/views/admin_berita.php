


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h1>Daftar Berita</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="col-md-2">
                                       <button type='button' class='btn btn-dark btn-md'><a href="<?php echo base_url() ?>PSB/tambah_berita"><i class="nav-icon fas fa-plus fa-fw"></i></a></button>
                                   </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID Berita</th>
                                        <th class="text-center">Judul</th>
                                        <th class="text-center">Tanggal Berita</th>
                                        <th class="text-center">Isi</th>
                                        <th class="text-center">Gambar</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($hasil->result_array() as $data) {                      ?>
                                        <tr>
                                            <td class="text-center"><?php echo $data['id_berita']; ?></td>
                                            <td class="text-center"><?php echo $data['judul']; ?></td>
                                            <td class="text-center"><?php echo $data['waktu']; ?></td>
                                            <td class="text-center"><?php echo $data['isi']; ?></td>
                                            <td class="text-center">
                                            <img src ="<?php echo base_url('uploads-berita/'.$data['foto_berita'])?>" style="width: 100px; length:100px;" alt="">
                                            </td>
                                            <td>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal" data-target="#editdata<?php echo  $data['id_berita'] ?>" class="btn btn-primary btn-block fas fa-edit">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal" data-target="#hapus<?php echo  $data['id_berita'] ?>" class="btn btn-danger btn-block fas fa-trash-alt">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal" tabindex="-1" role="dialog" id="hapus<?php echo $data['id_berita'] ?>">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hapus Data</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                                                        </button>
                                                    </div>
                                                    <div class="modal-body p-20">
                                                        <form action="<?php echo base_url() ?>PSB/delete_berita" method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="id_berita" value="<?php echo $data['id_berita'] ?>?>" />
                                                                    <p>Apakah kamu yakin ingin menghapus data ini?</i></b></p>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Tidak</button>
                                                                <button type="submit" class="btn btn-success ripple save-category">Ya</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                        <div class="modal" tabindex="-1" role="dialog" id="editdata<?php echo $data['id_berita'] ?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <form method="POST" action="<?php echo base_url() ?>PSB/update_berita" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="id_berita" class="col-sm-2 col-form-label">ID Berita</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="id_berita" id="id_berita" value="<?php echo $data['id_berita'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $data['judul'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama_product" class="col-sm-2 col-form-label">Tanggal Publikasi</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="waktu" name="waktu" value="<?php echo $data['waktu'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama_product" class="col-sm-2 col-form-label">Isi Berita</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nama_product" name="isi" value="<?php echo $data['isi'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama_product" class="col-sm-2 col-form-label">Gambar</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="foto_berita" name="foto_berita" value="<?php echo $data['foto_berita'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sekolah_asal" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php }  ?>

                    </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        </section>
        <!-- /.row -->
</div>
<!-- /.container-fluid -->

<!-- /.content -->
</div>