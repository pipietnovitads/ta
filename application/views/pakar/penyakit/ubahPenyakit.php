<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
    <li><a href="<?php echo base_url("pakar/penyakit") ?>">Daftar Penyakit</a></li>
    <li class="active">Ubah Penyakit</li>
</ol>

<h3>UBAH PENYAKIT</h3>
<hr>
<?php if (validation_errors()) : ?>
<div class="alert alert-danger"><?php echo validation_errors() ?></div>
<?php endif ?>

<form method="post">
    <div class="form-group">
        <label>Nama Penyakit</label>
        <input type="text" name="nama_penyakit" class="form-control" value="<?php echo $penyakit['nama_penyakit']; ?>">
    </div>

    <div class="form-group">
        <label>Definisi</label>
        <textarea class="form-control" name="definisi_penyakit"><?php echo $penyakit['definisi_penyakit'] ?></textarea>
    </div>

    <div class="form-group">
        <label>Saran Solusi</label>
        <textarea class="form-control" name="solusi_penyakit"><?php echo $penyakit['solusi_penyakit'] ?></textarea>
    </div>

    <div class="form-group">
        <label>Saran Pencegahan</label>
        <textarea class="form-control"
            name="pencegahan_penyakit"><?php echo $penyakit['pencegahan_penyakit']; ?></textarea>
    </div>

    <button class="btn btn-primary">Simpan</button>

</form>