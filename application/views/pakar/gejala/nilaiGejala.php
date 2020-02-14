<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
	<li><a href="<?php echo base_url("pakar/gejala") ?>">Daftar Gejala</a></li>
	<li class="active">Detail Nilai Gejala</li>
</ol>

<h3>DETAIL NILAI GEJALA</h3>
<hr>

<?php if ($this->session->flashdata('sukses')): ?>
	<div class="alert alert-success"><?php echo $this->session->flashdata('sukses'); ?></div>
<meta http-equiv="refresh" content="1">
<?php endif ?>

<a href="<?php echo base_url('pakar/gejala/tambahDetailGejala/'.$id_gejala) ?>" class="btn btn-primary">Tambah Detail</a>

<div class="table-responsive">
<br>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA GEJALA</th>
				<th>NAMA KETERANGAN</th>
				<th>NILAI</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($detail as $key => $value): ?>
			<tr>
				<td class="text-center"><?php echo $key+1 ?></td>
				<td><?php echo $value['nama_gejala'] ?></td>
				<td><?php echo $value['nama_detail_gejala'] ?></td>
				<td><?php echo $value['nilai_detail_gejala'] ?></td>
				<td class="text-center">
					<a href="<?php echo base_url('pakar/gejala/ubahDetailGejala/'.$id_gejala.'/'.$value['id_detail_gejala']) ?>" class="btn btn-primary"><i class="far fa-edit"></i></a>
					<a onclick="return confirm('yakin data dihapus?')" href="<?php echo base_url('pakar/gejala/hapusDetailGejala/'.$id_gejala.'/'.$value['id_detail_gejala']) ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>