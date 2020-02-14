<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
    <li><a href="<?php echo base_url("pakar/pengetahuan") ?>">Daftar Pengetahuan</a></li>
    <li class="active">Detail Pengetahuan</li>
</ol>

<h3>DETAIL PENGETAHUAN</h3>
<hr>

<?php if ($this->session->flashdata('sukses')) : ?>
<div class="alert alert-success"><?php echo $this->session->flashdata('sukses'); ?></div>
<meta http-equiv="refresh" content="1">
<?php endif ?>

<a href="<?php echo base_url('pakar/pengetahuan/tambahDetail/'.$id_pengetahuan) ?>" class="btn btn-primary">Tambah Detail</a> 
<a href="<?php echo base_url('pakar/pengetahuan/') ?>" class="btn btn-danger">Kembali</a>

<div class="table-responsive">
	<br>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th width="5%">No</th>
				<th width="10%">NAMA PENGETAHUAN</th>
				<th width="30%">NAMA GEJALA</th>
				<th width="10%">STATUS</th>
				<th width="10%">AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($detail as $key => $value): ?>
			<tr>
				<td class="text-center"><?php echo $key+1 ?></td>
				<td class="text-center"><?php echo $value['nama_pengetahuan'] ?></td>
				<td><?php echo $value['nama_gejala'] ?></td>
				<td class="text-center"><?php echo $value['status_pengetahuan'] ?></td>
				<td class="text-center">
					<a href="<?php echo base_url('pakar/pengetahuan/ubahDetail/'.$id_pengetahuan.'/'.$value['id_detail_pengetahuan']) ?>" class="btn btn-primary"><i class="far fa-edit"></i></a>
					<a onclick="return confirm('yakin hapus?')" href="<?php echo base_url('pakar/pengetahuan/hapusDetail/'.$id_pengetahuan.'/'.$value['id_detail_pengetahuan']) ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i</a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

