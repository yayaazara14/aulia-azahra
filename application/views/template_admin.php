<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<link rel="stylesheet" href="<?= base_url('asset/volermaster/dist/') ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url('asset/volermaster/dist/') ?>assets/vendors/chartjs/Chart.min.css">
	<link rel="stylesheet"
		href="<?= base_url('asset/volermaster/dist/') ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?= base_url('asset/volermaster/dist/') ?>assets/css/app.css">
	<link rel="shortcut icon" href="<?= base_url('asset/volermaster/dist/') ?>assets/images/logosibela.png"
		type="image/x-icon">
		<script src="https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

	</head>

<body>
	<div id="app">
		<div id="sidebar" class='active'>
			<div class="sidebar-wrapper active">
				<div class="sidebar-header">
					<a href="<?=site_url('home') ?>#contact" class="app-brand-link">
					<img src="<?= base_url('asset/volermaster/dist/') ?>assets/images/logosibela.png" alt="" srcset="">
				</div>
				<div class="sidebar-menu">
					<ul class="menu">
						<li class='sidebar-title'>Main Menu</li>
						<?php $menu = $this->uri->segment(2); ?>
						<li class="menu-item <?php if($menu=='home'){ echo "active"; } ?>">
							<a href="<?= site_url('admin/home') ?>" class='sidebar-link'>
								<i data-feather="home" width="20"></i>
								<span>Dashboard</span>
							</a>
						</li>
						<li class="menu-item <?php if($menu=='caraousel'){ echo "active"; } ?> ">
							<a href="<?= site_url('admin/caraousel') ?>" class='sidebar-link'>
								<i data-feather="layout" width="20"></i>
								<span>Caraousel</span>
							</a>
						</li>
						<li class="menu-item <?php if($menu=='kategori'){ echo "active"; } ?> ">
							<a href="<?= site_url('admin/kategori') ?>" class='sidebar-link'>
								<i data-feather="layers" width="20"></i>
								<span>Kategori Konten</span>
							</a>
						</li>
						<li class="menu-item <?php if($menu=='konten'){ echo "active"; } ?> ">
							<a href="<?= site_url('admin/konten') ?>" class='sidebar-link'>
								<i data-feather="grid" width="20"></i>
								<span>Konten</span>
							</a>
						</li>
						<?php if ($this->session->userdata('level') == 'Admin') { ?>
						<li class="menu-item <?php if($this->session->userdata('level') =='Admin'){ echo "active"; } ?> ">
							<a href="<?php if($menu=='user') ?>" class='sidebar-link'>
								<i data-feather="file-plus" width="20"></i>
								<span>Konfigurasi</span>
							</a>
						</li>
						<?php } ?>
						<?php if ($this->session->userdata('level') == 'Admin') { ?>
						<li class="menu-item <?php if($menu=='user'){ echo "active"; } ?> ">
							<a href="<?= site_url('admin/user') ?>" class='sidebar-link'>
								<i data-feather="user" width="20"></i>
								<span>User</span>
							</a>
						</li>
						<?php } ?>
					</ul>
				</div>
				<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
			</div>
		</div>
		<div id="main">
			<nav class="navbar navbar-header navbar-expand navbar-light">
				<a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
				<button class="btn navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
						<li class="dropdown">
							<a href="#" data-toggle="dropdown"
								class="nav-link dropdown-toggle nav-link-lg nav-link-user">
								<div class="avatar mr-1">
									<img src="<?= base_url('asset/volermaster/dist/') ?>assets/images/logosibela.png"
										alt="" srcset="">
								</div>
								<span
									class="d-none d-md-block d-lg-inline-block"><?= $this->session->userdata('nama') ?></span>
								<small
									class="d-none d-md-block d-lg-inline-block"><?= $this->session->userdata('level') ?></small>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i data-feather="user"></i> Password</a>
								<a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i
										data-feather="log-out"></i> Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<div class="main-content container-fluid">
				<div class="col-lg-12">

					<div class="card">
						<div class="card-header">

							<?= $contents; ?>
							
						</div>

					</div>

					<footer>
			<div class="footer clearfix mb-0 text-muted">
				<div class="float-left">
					<p>2020 &copy;</p>
				</div>
				<div class="float-right">
					<p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a
							href="https://www.instagram.com/azaraulia/">Aulia Azahra</a></p>
				</div>
			</div>
		</footer>
				</div>
			</div>

		</div>
		
	</div>
	<script src="<?= base_url('asset/volermaster/dist/') ?>assets/js/feather-icons/feather.min.js"></script>
	<script src="<?= base_url('asset/volermaster/dist/') ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js">
	</script>
	<script src="<?= base_url('asset/volermaster/dist/') ?>assets/js/app.js"></script>
	<script src="<?= base_url('asset/volermaster/dist/') ?>assets/vendors/chartjs/Chart.min.js"></script>
	<script src="<?= base_url('asset/volermaster/dist/') ?>assets/vendors/apexcharts/apexcharts.min.js"></script>
	<script src="<?= base_url('asset/volermaster/dist/') ?>assets/js/pages/dashboard.js"></script>
	<script src="<?= base_url('asset/volermaster/dist/') ?>assets/js/main.js"></script>
	<script src="https://cdn.tiny.cloud/1/ahnb0k5b62t0ov389qw34xinq1i9ghnj7hrpy75l5yovnkf2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>

</body>

  <script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>
</html>
