


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h1>Daftar Admin</h1>
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
                                       <button type='button' class='btn btn-dark btn-md'><a href="<?php echo base_url() ?>PSB/tambah_admin"><i class="nav-icon fas fa-plus fa-fw"></i></a></button>
                                   </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID Admin</th>
                                        <th class="text-center">Nama Admin</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Password</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($hasil->result_array() as $data) {                      ?>
                                        <tr>
                                            <td class="text-center"><?php echo $data['id_user']; ?></td>
                                            <td class="text-center"><?php echo $data['nama']; ?></td>
                                            <td class="text-center"><?php echo $data['email']; ?></td>
                                            <td class="text-center"><?php echo $data['password']; ?></td>
                                            <td class="text-center"><?php echo $data['status']; ?></td>
                                            <td>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal" data-target="#editdata<?php echo  $data['id_user'] ?>" class="btn btn-primary btn-block fas fa-edit">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal" data-target="#hapus<?php echo  $data['id_user'] ?>" class="btn btn-danger btn-block fas fa-trash-alt">
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal" tabindex="-1" role="dialog" id="hapus<?php echo $data['id_user'] ?>">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hapus Data</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                                                        </button>
                                                    </div>
                                                    <div class="modal-body p-20">
                                                        <form action="<?php echo base_url() ?>PSB/delete_admin" method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>?>" />
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
                        <div class="modal" tabindex="-1" role="dialog" id="editdata<?php echo $data['id_user'] ?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <form method="POST" action="<?php echo base_url() ?>PSB/update_admin" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="id_user" class="col-sm-2 col-form-label">ID account</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="id_user" id="id_user" value="<?php echo $data['id_user'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama Admin</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="email" name="email" value="<?php echo $data['email'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="email" name="email" value="<?php echo $data['password'] ?>" readonly>
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