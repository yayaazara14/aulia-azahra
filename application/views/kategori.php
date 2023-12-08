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
	<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body>

	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
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
							<li class="nav-item"><a href="#contact" class="nav-link">Contact Us</a></li>
						</ul>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->


	<section class="upcoming-meetings" id="meetings">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<h2>Categories</h2>
					</div>
				</div>
				<div class="col-lg-6">
					<?php foreach ($konten as $uu){ ?>
					<div class="meeting-item">
						<div class="thumb">

							<a href="meeting-details.html"><img
									src="<?= base_url('asset/upload/konten/'.$uu['foto']) ?>"></a>
						</div>
						<div class="down-content">
							<a>
								<h4><?= $uu['judul'] ?></h4>
							</a>
							<ul>
								<small class="mr-3"><i class="fa fa-user text-dark"></i><?= $uu['nama'] ?></a></small>
								<small class="mr-3"><i
										class="fa fa-folder text-dark"></i><?= $uu['nama_kategori'] ?></a></small>
							</ul>
							<div class="main-button-red">
								<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>">Baca Selengkapnya</a>
							</div>
						</div>
					</div>
					<?php } ?>
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
								<div class="scroll-to-section"><a href="<?= base_url('')?>"><?= $konfig->judul_website; ?></a></div>
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
