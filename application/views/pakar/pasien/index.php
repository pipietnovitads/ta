<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
    <li class="active">Daftar Pasien</li>
</ol>

<h3>DAFTAR PASIEN</h3>
<hr>

<div class="table-responsive">
    <table class="table table-bordered table-striped" id="thetable">
        <thead>
            <tr>
                <th>NO</th>
                <th>NOMER PASIEN</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>TANGGAL LAHIR</th>
                <th>NO TELP</th>
                <th>ALAMAT</th>
                <th>ALERGI</th>
                <th>AKSI</th>
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
                <td>
                    <a href="<?php echo base_url('pakar/pasien/detail/'.$value['id_pasien'])  ?>" class="btn btn-success"><i class="fas fa-info-circle"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>