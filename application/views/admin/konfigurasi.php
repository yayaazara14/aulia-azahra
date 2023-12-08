<div id="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Konfigurasi</h5>
						</div>
						<div class="modal-body">
							<div class="row mb-3">
								<label class="form-label">Judul Website</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="judul" value="<?= $konfig->judul_website; ?>" />
								</div>
							</div>
						</div>
						<div class="row mb-3">
							<label class="form-label">Profile</label>
							<div class="col-sm-10">
								<textarea name="profil_website" class="form-control"> <?= $konfig->judul_website; ?></textarea>
							</div>
						</div>
						<div class="modal-body">
							<div class="row mb-3">
								<label class="form-label">Instagram</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>" />
								</div>
							</div>
						</div>
                        <div class="modal-body">
							<div class="row mb-3">
								<label class="form-label">Facebook</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>" />
								</div>
							</div>
						</div>
                        <div class="modal-body">
							<div class="row mb-3">
								<label class="form-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" name="email" value="<?= $konfig->email; ?>" />
								</div>
							</div>
						</div>
                        <div class="modal-body">
							<div class="row mb-3">
								<label class="form-label">Alamat</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>" />
								</div>
							</div>
						</div>
                        <div class="modal-body">
							<div class="row mb-3">
								<label class="form-label">Whatsapp</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>" />
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger">Simpan</button>
						</div>
				</form>