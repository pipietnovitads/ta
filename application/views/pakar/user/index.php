<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
    <li class="active">Daftar Pengguna</li>
</ol>
<h3>DAFTAR PENGGUNA</h3>
<hr>

<?php if ($this->session->flashdata('sukses')) : ?>
<div class="alert alert-success"><?php echo $this->session->flashdata('sukses'); ?></div>
<meta http-equiv="refresh" content="1">
<?php endif ?>
    <a href="<?php echo base_url('pakar/user/tambah') ?>" class="btn btn-primary">Tambah Pengguna</a>
<br>
<div class="table-responsive">
<br>
    <table class="table table-bordered table-striped" id="thetable">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>USERNAME</th>
                <th>GAMBAR</th>
                <th>LEVEL</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $key => $value) : ?>
            <tr>
                <td class="text-center"><?php echo $key + 1 ?></td>
                <td><?php echo $value['nama_user'] ?></td>
                <td><?php echo $value['username_user'] ?></td>
                <td><?php echo $value['gambar_user'] ?></td>
                <td><?php echo $value['level_user'] ?></td>
                <td class="text-center">
                    <a href="<?php echo base_url('pakar/user/ubah/'.$value['id_user']) ?>"
                        class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <a onclick="return confirm('yakin hapus?')"
                        href="<?php echo base_url('pakar/user/hapus/'.$value['id_user']) ?>"
                        class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
