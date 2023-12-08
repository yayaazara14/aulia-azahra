<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">
	<div class="mt-1 mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Tambah User
		</button>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<form action="<?= base_url('admin/user/simpan') ?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
							<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label">Nama</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" placeholder="Nama" name="nama" required />
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label">Username</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" placeholder="Username" name="username"
										required />
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label">Password</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" placeholder="Password" name="password"
										required />
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label">Level</label>
								<div class="col-sm-10">
									<select name="level" class="form-control">
										<option value="Admin">Admin</option>
										<option value="Kontributor">Kontributor</option>
									</select>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-danger">Simpan</button>
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<div class="card">
	<div class="card-header">
		<h5>Data Pengguna</h5>
		<div class="card-header-right">
			<ul class="list-unstyled card-option">
				<li><i class="fa fa fa-wrench open-card-option"></i></li>
				<li><i class="fa fa-window-maximize full-card"></i></li>
				<li><i class="fa fa-minus minimize-card"></i></li>
				<li><i class="fa fa-refresh reload-card"></i></li>
				<li><i class="fa fa-trash close-card"></i></li>
			</ul>
		</div>
	</div>
	<div class="card-block table-border-style">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Username</th>
						<th>Nama</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($user as $aa) { ?>
					<tr>
						<td><?= $aa['username'] ?></td>
						<td><?= $aa['nama'] ?></td>
						<td><?= $aa['level'] ?></td>
						<td>
							<a class="btn btn-sm btn-danger "
								onClick="return confirm('Apakah anda yakin ingin hapus data ini?')"
								href="<?= base_url('admin/user/hapus/'.$aa['id_user']) ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
									class="bi bi-trash3-fill" viewBox="0 0 16 16">
									<path
										d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
								</svg></a>
							<button type="button" class="btn btn-warning" data-bs-toggle="modal"
								data-bs-target="#edit<?= $aa['id_user'] ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
									class="bi bi-pencil-fill" viewBox="0 0 16 16">
									<path
										d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
								</svg>

							</button>
							<div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<form action="<?= base_url('admin/user/update') ?>" method="post">
										<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Perbaharui Nama User</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<div class="row mb-3">
													<label class="col-sm-2 col-form-label">Nama</label>
													<div class="col-sm-10">
														<input type="text" class="form-control"
															value="<?= $aa['nama'] ?>" name="nama" required />
													</div>
												</div>
												<div class="row mb-3">
													<label class="col-sm-2 col-form-label">Username</label>
													<div class="col-sm-10">
														<input type="text" class="form-control"
															value="<?= $aa['username'] ?>" name="username" readonly />
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-danger">Simpan</button>
											</div>
									</form>
								</div>
							</div>
		</div>
		<?php } ?>
	</div>
</div>
