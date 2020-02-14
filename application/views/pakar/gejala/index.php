<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
    <li class="active">Daftar Gejala</li>
</ol>
<h3>DAFTAR GEJALA</h3>
<hr>

<?php if ($this->session->flashdata('sukses')) : ?>
<div class="alert alert-success"><?php echo $this->session->flashdata('sukses'); ?></div>
<meta http-equiv="refresh" content="1">
<?php endif ?>

<a href="<?php echo base_url('pakar/gejala/tambah') ?>" class="btn btn-primary">Tambah Gejala</a>

<div class="table-responsive">
<br>
    <table class="table table-bordered table-striped" id="thetable">
        <thead>
            <tr>
                <th>NO</th>
                <th width="60%">NAMA GEJALA</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gejala as $key => $value) : ?>
            <tr>
                <td class="text-center"><?php echo $key + 1; ?></td>
                <td><?php echo $value['nama_gejala'] ?></td>
                <td class="text-center">
                    <a href="<?php echo base_url('pakar/gejala/detail/'.$value['id_gejala']) ?>" class="btn btn-success"><i class="fas fa-info-circle"></i></a>
                    <a href="<?php echo base_url('pakar/gejala/ubah/'.$value['id_gejala']) ?>"
                        class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <a onclick="return confirm('yakin hapus?')"
                        href="<?php echo base_url('pakar/gejala/hapus/'.$value['id_gejala']) ?>"
                        class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
