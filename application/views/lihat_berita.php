<section class="about-generic-area section-gap">
	<div class="container">
		<div class="section-top-border">
			<div class="row">
				<div class="col-md-3">
				<img src="<?php echo base_url('uploads-berita/' . $berita->foto_berita) ?>" alt="" class="img-fluid float-left mr-20 mb-20">
				</div>
				<div class="col-md-5 mt-sm-10">
					<h1 class="mb-60"><p><?= $berita->judul; ?></p></h1>
					<h3 class="mb-60"><p><?= $berita->waktu; ?></p></h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container border-top-generic">

		<div class="row">
			<div class="col-md-12">
				<div class="img-text">
					<p><?= $berita->isi; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Generic Start -->