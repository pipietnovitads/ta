<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
    <li class="active">Ubah Profil</li>
</ol>
<h3>Ubah Profil</h3>
<hr>
<?php if (validation_errors()): ?>
	<div class="aler alert-danger"><?php echo validation_errors() ?></div>
<?php endif ?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama_user" class="form-control" value="<?php echo $profil['nama_user'] ?>">
	</div>

	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username_user" class="form-control" value="<?php echo $profil['username_user'] ?>">
	</div>

	<img src="<?php echo base_url("assets/img/".$profil['gambar_user']) ?>" class="img-responsive" style="height: 100px;">
	<div class="form-group">
		<label>Gambar</label>
		<input type="file" name="gambar_user" class="form-control">
	</div>

	<button class="btn btn-primary">Simpan</button>
</form>