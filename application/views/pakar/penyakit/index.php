<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
    <li class="active">Daftar Penyakit</li>
</ol>

<h3>DAFTAR PENYAKIT</h3>
<hr>

<?php if ($this->session->flashdata('sukses')) : ?>
<div class="alert alert-success"><?php echo $this->session->flashdata('sukses'); ?></div>
<meta http-equiv="refresh" content="1">
<?php endif ?>

<a href="<?php echo base_url('pakar/penyakit/tambah') ?>" class="btn btn-primary">Tambah Penyakit</a>

<div class="table-responsive">
<br>
    <table class="table table-bordered table-striped" id="thetable">
        <thead>
            <tr>
                <th>NO</th>
                <th width="15%">NAMA PENYAKIT</th>
                <th width="40%">DEFINISI</th>
                <th width="15%">SARAN SOLUSI</th>
                <th width="20%">SARAN PENCEGAHAN</th>
                <th width="10%">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($penyakit as $key => $value) : ?>
            <tr>
                <td class="text-center"><?php echo $key + 1 ?></td>
                <td><?php echo $value['nama_penyakit'] ?></td>
                <td><?php echo $value['definisi_penyakit'] ?></td>
                <td><?php echo $value['solusi_penyakit'] ?></td>
                <td><?php echo $value['pencegahan_penyakit'] ?></td>
                <td class="text-center">
                    <a href="<?php echo base_url('pakar/penyakit/ubah/'.$value['id_penyakit']) ?>"
                        class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <a onclick="return confirm('yakin hapus?')"
                        href="<?php echo base_url('pakar/penyakit/hapus/'.$value['id_penyakit']) ?>"
                        class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
