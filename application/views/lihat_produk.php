<section class="about-generic-area section-gap">
	<div class="container">
		<div class="section-top-border">
			<div class="row">
				<div class="col-md-3">
				<img src="<?php echo base_url('uploads/' . $produk->foto_produk) ?>" alt="" class="img-fluid float-left mr-20 mb-20">
				</div>
				<div class="col-md-5 mt-sm-10">
					<h1 class="mb-60"><p><?= $produk->nama_product; ?></p></h1>
					<h3 class="mb-60"><p><?= $produk->release_date; ?></p></h3>
					<a href="/https://api.whatsapp.com/send/?phone=%2B628509337924&text&type=phone_number&app_absent=0" class="primary-btn header-btn text-uppercase">Pesan Sekarang</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container border-top-generic">

		<div class="row">
			<div class="col-md-12">
				<div class="img-text">
					<p><?= $produk->deskripsi; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Generic Start -->