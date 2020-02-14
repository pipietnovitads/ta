<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
	<li><a href="<?php echo base_url("pakar/gejala") ?>">Daftar Gejala</a></li>
	<li class="active">Ubah Gejala</li>
</ol>
<h3>UBAH GEJALA</h3>
<hr>
<?php if (validation_errors()) : ?>
<div class="alert alert-danger"><?php echo validation_errors() ?></div>
<?php endif ?>

<form method="post">
    <div class="form-group">
        <label>Nama Gejala</label>
        <input type="text" name="nama_gejala" class="form-control" value="<?php echo $gejala['nama_gejala']; ?>">
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>