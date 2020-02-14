<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
    <li class="active">Ubah Password</li>
</ol>
<h3>Ubah Password</h3>
<hr>
<?php echo $this->session->flashdata('gagal'); ?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Password Lama</label>
		<input type="password" name="password_lama" class="form-control">
	</div>

	<div class="form-group">
		<label>Password Baru</label>
		<input type="password" name="password_baru" class="form-control">
	</div>

	<div class="form-group">
		<label>Konfirmasi Password</label>
		<input type="password" name="password_konfirmasi" class="form-control">
	</div>
	<button class="btn btn-primary">Simpan</button>
</form>