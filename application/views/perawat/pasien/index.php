<ol class="breadcrumb">
    <li><a href="<?php echo base_url("perawat/dashboard") ?>">Home</a></li>
    <li class="active">Daftar Pasien</li>
</ol>

<h3>DAFTAR PASIEN</h3>
<hr>
<?php if ($this->session->flashdata('sukses')): ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('sukses'); ?></div>
    <meta http-equiv="refresh" content="1">
<?php endif ?>


<a href="<?php echo base_url('perawat/pasien/tambah') ?>" class="btn btn-primary">Tambah Pasien</a>
<div class="table-responsive">
<br>
    <table class="table table-bordered table-striped" id="thetable">
        <thead>
            <tr>
                <th width="1%">No</th>
                <th width="2%">Nomer Pasien</th>
                <th width="15%">Nama Pasien</th>
                <th width="5%">Jenis Kelamin</th>
                <th width="10%">Tanggal Lahir</th>
                <th width="10%">Telp</th>
                <th width="15%">Alamat</th>
                <th width="10%">Alergi</th>
                <th width="15%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pasien as $key => $value) : ?>
            <tr>
                <td class="text-center"><?php echo $key + 1 ?></td>
                <td class="text-center"><?php echo $value['nomer_pasien'] ?></td>
                <td><?php echo $value['nama_pasien'] ?></td>
                <td><?php echo $value['jenis_kelamin_pasien'] ?></td>
                <td><?php echo $value['tgl_lahir_pasien'] ?></td>
                <td><?php echo $value['telp_pasien'] ?></td>
                <td><?php echo $value['alamat'] ?></td>
                <td><?php echo $value['alergi_pasien'] ?></td>
                <td class="text-center">
                    <a href="<?php echo base_url('perawat/pasien/detail/'.$value['id_pasien']) ?>" class="btn btn-success"><i class="fas fa-info-circle"></i></a>
                    <a href="<?php echo base_url('perawat/pasien/ubah/'.$value['id_pasien']) ?>" class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <a onclick="return confirm('yakin hapus?')"
                        href="<?php echo base_url('perawat/pasien/hapus/' . $value['id_pasien']) ?>"
                        class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
