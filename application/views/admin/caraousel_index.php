<div id="menghilang">
	<?= $this->session->flashdata('alert', true) ?>
</div>
<div class="col-x1-12">
	<div class="card">
		<form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
			<h5 class="card-header">File input</h5>
			<div class="card-body">
				<div class="col mb-3">
					<label class="form-label">Judul</label>
					<input type="text" class="form-control" placeholder="Judul Foto" name="judul" required />
				</div>
				<div class="mb-3">
					<label for="formFile" class="form-label">Pilih foto dengan ukuran (1:3)</label>
					<input class="form-control" type="file" name="foto">
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>
<?php foreach ($caraousel as $aa){ ?>
<div class="col-md-12 mb-3 mt-3">
	<div class="card h-100">
		<img class="card-img" src="<?= base_url('asset/upload/caraousel/'.$aa['foto']) ?>">
		<div class="card-body">
			<h5 class="card-title"><?= $aa['judul'] ?></h5>
			<a class="btn btn-sm btn-danger "
			onClick="return confirm('Apakah anda yakin ingin hapus data ini?')"
								href="<?= base_url('admin/caraousel/delete_data/'.$aa['foto']);?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
									class="bi bi-trash3-fill" viewBox="0 0 16 16">
									<path
										d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
								</svg></a>
		</div>
	</div>
</div>
<?php } ?>
