<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
	<li><a href="<?php echo base_url("pakar/gejala") ?>">Daftar Gejala</a></li>
	<li class="active">Ubah Detail Gejala</li>
</ol>

<h3>Ubah Detail Gejala</h3>
<hr>
<?php if (validation_errors()) : ?>
<div class="alert alert-danger"><?php echo validation_errors() ?></div>
<?php endif ?>
<form method="post">
	<div class="form-group">
		<label>Nama Gejala</label>
		<input readonly="" value="<?php echo $gejala['nama_gejala'] ?>" class="form-control">
		<input hidden name="id_gejala" value="<?php echo $gejala['id_gejala'] ?>">
	</div>

	<div class="form-group">
		<label>Nama Keterangan</label>
		<input type="text" name="nama_detail_gejala" class="form-control" value="<?php echo $detail['nama_detail_gejala'] ?>">
	</div>

	<div class="form-group">
		<label>Nilai Keterangan</label>
		<input type="number" name="nilai_detail_gejala" class="form-control" min="0" max="1" step=".01" value="<?php echo $detail['nilai_detail_gejala'] ?>">
	</div>

	<button class="btn btn-primary">Simpan</button>
</form>