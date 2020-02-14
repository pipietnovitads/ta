<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
    <li><a href="<?php echo base_url("pakar/pengetahuan") ?>">Daftar Pengetahuan</a></li>
    <li class="active">Tambah Pengetahuan</li>
</ol>

<h3>TAMBAH PENGETAHUAN</h3>
<hr>
<?php if (validation_errors()) : ?>
<div class="alert alert-danger"><?php echo validation_errors() ?></div>
<?php endif ?>
<form method="post">

    <div class="form-group">
        <label>Nama Penyakit</label>
        <select name="id_penyakit" class="form-control">
            <option value="">Pilih</option>
            <?php foreach ($penyakit as $key => $value) : ?>
            <option value="<?php echo $value['id_penyakit'] ?>"><?php echo $value['nama_penyakit'] ?></option>
            <?php endforeach ?>
        </select>
    </div>

    <div class="form-group">
        <label>Nilai CF</label>
        <input type="number" name="cf_pengetahuan" class="form-control" min="-1" max="1" step=".01" value="<?php echo set_value("cf_pengetahuan")?>">
    </div>

    <button class="btn btn-primary">Simpan</button>
</form>