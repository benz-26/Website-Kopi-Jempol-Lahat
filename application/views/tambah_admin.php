  <!-- Content Wrapper. Contains page content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Registration</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?php echo base_url() ?>PSB/do_input_admin" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="id_admin" class="col-sm-2 col-form-label">ID Admin</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="id_admin" id="id_admin" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama admin</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nama" name="nama" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="email" name="email" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="password" name="password" >
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
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  </body>

  </html>