<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign in </title>
	<link rel="stylesheet" href="<?= base_url('asset/volermaster/dist/') ?>assets/css/bootstrap.css">

	<link rel="shortcut icon" href="<?= base_url('asset/volermaster/dist/') ?>assets/images/logosibela.png" type="image/x-icon">
	<link rel="stylesheet" href="<?= base_url('asset/volermaster/dist/') ?>assets/css/app.css">
</head>

<body>
	<div id="auth">

		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-25 mx-auto">
					<div class="card pt-2">
						<div class="card-body">
							<div class="text-center mb-5">
								<img src="<?= base_url('asset/volermaster/dist/') ?>assets/images/logo.png" height="200"
									class='mb-30'>
								<h3>Sign In</h3>
							</div>
							<form action="<?= base_url('auth/login'); ?>" method="post">
								<div class="form-group position-relative has-icon-left">
									<label for="username">Username</label>
									<div class="position-relative">
										<input type="text" class="form-control" name="username">
										<div class="form-control-icon">
											<i data-feather="user"></i>
										</div>
									</div>
								</div>
								<div class="form-group position-relative has-icon-left">
									<div class="clearfix">
										<label for="password">Password</label>
									</div>
									<div class="position-relative">
										<input type="password" class="form-control" name="password">
										<div class="form-control-icon">
											<i data-feather="lock"></i>
										</div>
									</div>
								</div>
						<div class="clearfix">
							<button type="submit" class="btn btn-primary float-right">Submit</button>
						</div>
						<div id="menghilang">
							<?= $this->session->flashdata('alert') ?>
						</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	</div>
	<script src="<?= base_url('asset/volermaster/dist/') ?>assets/js/feather-icons/feather.min.js"></script>
	<script src="<?= base_url('asset/volermaster/dist/') ?>assets/js/app.js"></script>

	<script src="<?= base_url('asset/volermaster/dist/') ?>assets/js/main.js"></script>
</body>

</html>
