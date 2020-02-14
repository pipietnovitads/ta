<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
    <li class="active">Daftar Pengetahuan</li>
</ol>

<h3>DAFTAR PENGETAHUAN</h3>
<hr>

<?php if ($this->session->flashdata('sukses')) : ?>
<div class="alert alert-success"><?php echo $this->session->flashdata('sukses'); ?></div>
<meta http-equiv="refresh" content="1">
<?php endif ?>

<a href="<?php echo base_url('pakar/pengetahuan/tambah') ?>" class="btn btn-primary">Tambah Pengetahuan</a>

<div class="tabel table-responsive">
<br>
    <table class="table table-bordered table-striped" id="thetable">
        <thead>
            <tr>
                <th width="10%">NO</th>
                <th width="20%">NAMA PENYAKIT</th>
                <th width="20%">NAMA PENGETAHUAN</th>
                <th width="15%">NILAI CF</th>
                <th width="15%">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pengetahuan as $key => $value) : ?>
            <tr>
                <td class="text-center"><?php echo $key + 1 ?></td>
                <td><?php echo $value['nama_penyakit'] ?></td>
                <td class="text-center"><?php echo $value['nama_pengetahuan'] ?></td>
                <td class="text-center"><?php echo $value['cf_pengetahuan'] ?></td>
                <td class="text-center">
                    <a href="<?php echo base_url('pakar/pengetahuan/detail/'.$value['id_pengetahuan']) ?>" class="btn btn-success"><i class="fas fa-info-circle"></i></a>
                    <a href="<?php echo base_url('pakar/pengetahuan/ubah/'.$value['id_pengetahuan']) ?>"
                        class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <a onclick="return confirm('yakin hapus?')"
                        href="<?php echo base_url('pakar/pengetahuan/hapus/'.$value['id_pengetahuan']) ?>"
                        class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>