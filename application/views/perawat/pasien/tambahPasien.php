<ol class="breadcrumb">
    <li><a href="<?php echo base_url("perawat/dashboard") ?>">Home</a></li>
    <li><a href="<?php echo base_url("perawat/pasien") ?>">Daftar Pasien</a></li>
    <li class="active">Tambah Pasien</li>
</ol>

<h3>TAMBAH PASIEN</h3>
<hr>
<?php if (validation_errors()): ?>
    <div class="alert alert-danger"><?php echo validation_errors() ?></div>
<?php endif ?>

<form method="post">

    <div class="form-group">
        <label>Nama Pasien</label>
        <input type="text" name="nama_pasien" class="form-control" value="<?php echo set_value("nama_peyakit") ?>">
    </div>

    <label>Jenis Kelamin</label>
    <div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="Pria" name="jenis_kelamin_pasien">
            <label class="form-check-label" for="pasien">
                Pria
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="Wanita" name="Jenis_kelamin_pasien">
            <label class="form-check-label" for="pasien">
                Wanita
            </label>
        </div>
    </div>

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir_pasien" class="form-control" value="<?php echo set_value("tgl_lahir_pasien") ?>">
    </div>

    <div class="form-group">
        <label>No Telp</label>
        <input type="text" name="telp_pasien" class="form-control" value="<?php echo set_value("telp_pasien") ?>">
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" name="alamat"><?php echo set_value("alamat") ?></textarea>
    </div>

    <div class="form-group">
        <label>Alergi</label>
        <input type="text" name="alergi_pasien" class="form-control" value="<?php echo set_value("alergi_pasien") ?>">
    </div>
    <button class="btn btn-primary">Simpan</button>
</form>