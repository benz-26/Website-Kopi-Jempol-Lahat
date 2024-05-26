  <!-- Content Wrapper. Contains page content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Produk</h1>
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
              <form method="POST" action="<?php echo base_url() ?>PSB/do_input_produk" enctype="multipart/form-data">
                <div class="form-group row">
                  <label for="id_product" class="col-sm-2 col-form-label">ID product</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="id_product" id="id_product" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="release_date" class="col-sm-2 col-form-label">Tanggal Rilis</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" id="release_date" name="release_date">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama_product" class="col-sm-2 col-form-label">Nama Produk</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_product" name="nama_product">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="foto_produk" class="col-sm-2 col-form-label">Foto</label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control" id="foto_produk" name="foto_produk">
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