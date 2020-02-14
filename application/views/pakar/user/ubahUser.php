<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
    <li><a href="<?php echo base_url("pakar/user") ?>">Daftar Pengguna</a></li>
    <li class="active">Ubah Perawat</li>
</ol>

<h3>UBAH PENGGUNA</h3>
<hr>

<?php if (validation_errors()) : ?>
<div class="alert alert-danger"><?php echo validation_errors() ?></div>
<?php endif ?>


<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama_user" value="<?php echo $user['nama_user']; ?>" class="form-control">
    </div>

    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username_user" value="<?php echo $user['username_user']; ?>" class="form-control">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password_user" value="" class="form-control">
    </div>

    <img src="<?php echo base_url('assets/img/') . $user['gambar_user'] ?>" class="img-responsive"
        style="height: 100px;">
    <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="gambar_user" class="form-control">
    </div>

    <label>Level</label>
    <div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="Dokter" name="level_user" <?php if ($user['level_user']=="Dokter") { echo "checked"; } ?>>
            <label class="form-check-label" for="user">
                Dokter
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="Perawat" name="level_user" <?php if ($user['level_user'] == "Perawat") { echo "checked"; }?>>
            <label class="form-check-label" for="user">
                Perawat
            </label>
        </div>
    </div>

    <button class="btn btn-primary">Simpan</button>

</form>