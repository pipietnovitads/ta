<ol class="breadcrumb">
    <li><a href="<?php echo base_url("perawat/dashboard") ?>">Home</a></li>
    <li class="active">Daftar Penyakit</li>
</ol>

<h3>DAFTAR PENYAKIT</h3>
<hr>
<div class="table-responsive">
  <table class="table table-striped table-bordered" id="thetable">
    <thead>
      <tr>
        <th width="5%">NO</th>
        <th width="12%">NAMA PENYAKIT</th>
        <th width="30%">DEVINISI PENYAKIT</th>
        <th width="15%">SARAN SOLUSI</th>
        <th width="15%">SARAN PENCEGAHAN</th>
      </tr>
    </thead>

    <tbody>
    <?php foreach ($penyakit as $key => $value): ?>
      <tr>
        <td class="text-center"><?php echo $key+1 ?></td>
        <td><?php echo $value['nama_penyakit'] ?></td>
        <td><?php echo $value['definisi_penyakit'] ?></td>
        <td><?php echo $value['solusi_penyakit'] ?></td>
        <td><?php echo $value['pencegahan_penyakit'] ?></td>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
</div>