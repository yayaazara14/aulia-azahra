<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="TemplateMo">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<title><?= $judul; ?></title>
	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('asset/edu/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="<?= base_url('asset/edu/') ?>assets/css/fontawesome.css">
	<link rel="stylesheet" href="<?= base_url('asset/edu/') ?>assets/css/templatemo-edu-meeting.css">
	<link rel="stylesheet" href="<?= base_url('asset/edu/') ?>assets/css/owl.css">
	<link rel="stylesheet" href="<?= base_url('asset/edu/') ?>assets/css/lightbox.css">
</head>

<body>
	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="index.html" class="logo">
							<?= $konfig->judul_website; ?>
						</a>
						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li class="nav-item"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
							<?php foreach ($kategori as $kate){ ?>
							<li class="nav-item"><a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"
									class="nav-link"><?= $kate['nama_kategori'] ?></a></li>
							<?php } ?>
						</ul>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->

	<section class="upcoming-meetings" id="meetings" style="color: white;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="d-flex flex-column text-left mb-3">
						<p class="section-title pr-5">
							<span class="pr-2">Blog Detail Page</span>
						</p>
						<h1 class="mb-3"><?= $konten->judul; ?></h1>
						<div class="d-flex">
							<p class="mr-3" style="color: white;"><i
									class="fa fa-user text-primary"></i><?= $konten->nama; ?></p>
							<p class="mr-3" style="color: white;">
								<i class="fa fa-folder text-primary"></i> <?= $konten->nama_kategori; ?>
							</p>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<img class="img-fluid rounded lg-6"
									src="<?= base_url('asset/upload/konten/'.$konten->foto) ?>" />
								<p class="text-white"><?= $konten->keterangan; ?></p>
								<p class="text-white"><strong>Link Terkait : </strong> <a
										href="https://drive.google.com/drive/folders/1lYZuroiOnbpKqFujyxTysWQJn2pb-3cS?usp=drive_link">ISI
										KONTEN</p>
							</div>
						</div>
					</div>
				</div>
	</section>


	<section class="contact-us" id="contact">
		<section class="section main-banner" id="top" data-section="section1">
			<video autoplay muted loop id="bg-video">
				<source src="<?php echo base_url('asset/edu/'); ?>assets/images/backcaraousel.mp4" type="video/mp4" />
			</video>
			<div class="video-overlay header-text">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="caption">
								<div class="col-lg-12">
									<h2><?= $konfig->judul_website; ?></h2>
								</div>
								<p><?= $konfig->profil_website; ?></p>
								<div class="main-button-red">
									<div class="scroll-to-section"><a
											href="<?= base_url('')?>"><?= $konfig->judul_website; ?></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="footer">
				<div class="row">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a>
							<a href="<?= $konfig->instagram; ?>"><i class="fa fa-instagram"></i></a>
							<a href="<?= $konfig->email; ?>"><i class="fa fa-envelope"></i></a>
							<a href="<?= $konfig->no_wa; ?>"><i class="fa fa-phone"></i></a></li>
					</ul>
					<p class="cm-0 text-center text-grey">
						&copy;
						<a class="text-primary font-weight-bold" href="#"><?= $konfig->judul_website; ?></a>,
						All Rights Reserved.
					</p>
				</div>
			</div>
		</section>

		<!-- Scripts -->
		<!-- Bootstrap core JavaScript -->
		<script src="<?= base_url('asset/edu/') ?>vendor/jquery/jquery.min.js"></script>
		<script src="<?= base_url('asset/edu/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<script src="<?= base_url('asset/edu/') ?>assets/js/isotope.min.js"></script>
		<script src="<?= base_url('asset/edu/') ?>assets/js/owl-carousel.js"></script>
		<script src="<?= base_url('asset/edu/') ?>assets/js/lightbox.js"></script>
		<script src="<?= base_url('asset/edu/') ?>assets/js/tabs.js"></script>
		<script src="<?= base_url('asset/edu/') ?>assets/js/video.js"></script>
		<script src="<?= base_url('asset/edu/') ?>assets/js/slick-slider.js"></script>
		<script src="<?= base_url('asset/edu/') ?>assets/js/custom.js"></script>

</body>

</body>

</html>
