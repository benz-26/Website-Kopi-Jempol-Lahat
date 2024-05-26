
        <!-- header-area-end -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Account Registration</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <form method="POST" action="<?php echo base_url() ?>PSB/do_input_berita" enctype="multipart/form-data">
              <div class="form-group row">
                <label for="id_berita" class="col-sm-2 col-form-label">ID berita</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="id_berita" id="id_berita" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Judul berita</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="judul" name="judul" >
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Waktu</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="waktu" name="waktu" >
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Isi</label>
                <div class="col-sm-9">
                  <input type="text-area" class="form-control" id="isi" name="isi" >
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Foto Berita</label>
                <div class="col-sm-9">
                  <input type="file" class="form-control" id="foto_berita" name="foto_berita" >
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
        </div>
      </div>
    </div>
  </section>
</div>
</body>

</html>