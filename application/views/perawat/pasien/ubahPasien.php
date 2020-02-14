<ol class="breadcrumb">
    <li><a href="<?php echo base_url("perawat/dashboard") ?>">Home</a></li>
    <li><a href="<?php echo base_url("perawat/pasien") ?>">Daftar Pasien</a></li>
    <li class="active">Ubah Pasien</li>
</ol>

<h3>UBAH DATA PASIEN</h3>
<hr>
<?php if (validation_errors()): ?>
	<div class="alert alert-danger"><?php echo validation_errors() ?></div>
<?php endif ?>

<form method="post">

     <div class="form-group">
        <label>Nomer Pasien</label>
        <input readonly name="nomer_pasien" value="<?php echo $pasien['nomer_pasien']?>" class="form-control">
    </div>

    <div class="form-group">
        <label>Nama Pasien</label>
        <input type="text" name="nama_pasien" value="<?php echo $pasien['nama_pasien']?>" class="form-control">
    </div>

    <label>Jenis Kelamin</label>
    <div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="Pria" name="jenis_kelamin_pasien" <?php if ($pasien['jenis_kelamin_pasien']=="Pria"){echo "checked";} ?>>
            <label class="form-check-label" for="pasien">
                Pria
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="Wanita" name="jenis_kelamin_pasien" <?php if ($pasien['jenis_kelamin_pasien']=="Wanita"){echo "checked";} ?>>
            <label class="form-check-label" for="pasien">
                Wanita
            </label>
        </div>
    </div>

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir_pasien" value="<?php echo $pasien['tgl_lahir_pasien']?>" class="form-control">
    </div>

    <div class="form-group">
        <label>No Telp</label>
        <input type="number" name="telp_pasien" value="<?php echo $pasien['telp_pasien']?>" class="form-control">
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" name="alamat"><?php echo $pasien['alamat'] ?></textarea>
    </div>

     <div class="form-group">
        <label>Alergi</label>
        <input type="text" name="alergi_pasien" value="<?php echo $pasien['alergi_pasien']?>" class="form-control">
    </div>

    <button class="btn btn-primary">Simpan</button>
</form>