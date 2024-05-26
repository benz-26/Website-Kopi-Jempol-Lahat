

  <!-- start banner Area -->
  <section class="banner-area relative" id="home">
    <div class="container">
      <div class="row fullscreen d-flex align-items-center justify-content-start">
        <div class="banner-content col-lg-8 col-md-12">
          <h4 class="text-white text-uppercase">
            Hadir Untuk Para Pecinta Kopi
          </h4>
          <h1>Kopi Cap Bukit Jempol Lahat</h1>
          <p class="text-white">
            Kopi Lahat adalah Kopi Robusta dan Arabika yang berasal dari Kabupaten Lahat Sumatera Selatan, dengan proses pasca panen sesuai standarisasi Premium dari biji kopi petik merah yang berkualitas, ditanam di Ketinggian 200 - 1400 MDPL, di Bukit Barisan Sumatera Selatan, kopi memiliki rasa dan aroma yang khas, rasa coklat, cinnamon (kayu manis), dengan accidity yang fruit, sehingga cocok untuk dinikmati dengan berbagai macam metode.
          </p>
          <a href="#produk" class="primary-btn header-btn text-uppercase">Produk Kami</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->

  <!-- Start top-dish Area -->
  <section class="top-dish-area section-gap" id="dish">
    <div class="container">

      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-60 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">Produk Unggulan Kami</h1>
            <p>Didedikasikan untuk penikmat kopi.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <?php foreach ($product_hasil->result_array() as $data) { ?>
          <div class="single-dish col-lg-4">
            <div class="thumb">
              <img class="img-fluid" src="<?php echo base_url('uploads/' . $data['foto_produk']) ?>" alt="" />
            </div>
            <h4 class="text-uppercase pt-20 pb-20">
              <?php echo $data['nama_product'] ?>
            </h4>
            <p>
              <?php echo implode(' ', array_slice(explode(' ', $data['deskripsi']), 0, 150)) . "..."; ?>
            </p>
          </div>
        <?php } ?>
      </div>
    </div>
    </div>


  </section>
  <!-- End top-dish Area -->

  <!-- Start video Area -->
  <section class="video-area">
    <div class="container">
      <div class="row justify-content-center align-items-center flex-column">

          <img src="img/play-btn.png" alt="" />
        </a>
        <h3 class="pt-20 pb-20 text-white">
          Cita Rasa Kopi Terbaik Khas Sumatera Selatan
        </h3>
        <p class="text-white">Youtube video will appear in popover</p>
      </div>
    </div>
  </section>
  <!-- End video Area -->

  <!-- Start features Area -->
  <section class="features-area pt-100" id="feature">
    <div class="container">
      <div class="feature-section">
        <div class="row">
          <div class="single-feature col-lg-4 col-md-6">
            <img src="img/f1.png" alt="" />
            <h4 class="pt-20 pb-20">Kopi Berkualitas</h4>
          </div>
          <div class="single-feature col-lg-4 col-md-6">
            <img src="img/f2.png" alt="" />
            <h4 class="pt-20 pb-20">Bersertifikat Halal & SNI</h4>
          </div>
          <div class="single-feature col-lg-4 col-md-6">
            <img src="img/f3.png" alt="" />
            <h4 class="pt-20 pb-20">Asli Daerah Lahat</h4>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End features Area -->

  <!-- Start related Area -->

  <!-- End related Area -->

  <section class="related-area section-gap" id="produk">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-60 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">Produk Kami</h1>
            <p>Produk-produk Kopi bercita rasa tinggi, khas Lahat</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="active-realated-carusel">

        <?php foreach ($product_hasil->result_array() as $data) { ?>
          <div class="item row align-items-center">
            <div class="col-lg-6 rel-left">
              <h3><?php echo $data['nama_product'] ?></h3>
              <p class="pt-30 pb-30">
              <?php echo $data['deskripsi'] ?>
              </p>
              <a href="<?= base_url('PSB/lihat_produk/' . $data['id_product']) ?>" class="primary-btn header-btn text-uppercase">view full menu</a>
            </div>
            <div class="col-lg-6">
              <img class="img-fluid" src="<?php echo base_url('uploads/' . $data['foto_produk']) ?>" alt="" />
            </div>
          </div>
        <?php
            }
        ?>
        </div>
      </div>
    </div>
</section>




  <!-- start blog Area -->
  <section class="blog-area section-gap" id="blog">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">Berita</h1>
            <p>
              Berita Tentang Kopi Cap Bukit Jempol Lahat
            </p>
          </div>
        </div>
      </div>


      <div class="row">
        <?php foreach ($berita_hasil->result_array() as $data) {                      ?>
          <div class="col-lg-3 col-md-6 single-blog">
            <div class="thumb">
              <img class="img-fluid" src="<?php echo base_url('uploads-berita/' . $data['foto_berita']) ?>" alt="" style="object-fit: cover; width: 300px; height: 300px;" />
            </div>
            <p class="date"><?= $data['waktu']; ?></p>
              <h4><?= $data['judul']; ?></h4>
            <?php echo implode(' ', array_slice(explode(' ', $data['isi']), 0, 150)) . "..."; ?>
            
            <div class="meta-bottom d-flex justify-content-between">
            <a href="<?= base_url('PSB/lihat_berita/' . $data['id_berita']) ?>" class="primary-btn header-btn text-uppercase">Baca Selengkapnya</a>
            </div>
          </div>
        <?php }  ?>
      </div>

    </div>
    </div>

  </section>
  <!-- end blog Area -->

