<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
    <li class="active">Threshold</li>
</ol>

<h3>Data Threshold</h3>
<hr>
<?php if ($this->session->flashdata('sukses')) : ?>
<div class="alert alert-success"><?php echo $this->session->flashdata('sukses'); ?></div>
<meta http-equiv="refresh" content="1">
<?php endif ?>


<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>NO</th>
				<th>NILAI THRESHOLD</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="text-center"><?php echo $threshold['id_threshold'] ?></td>
				<td><?php echo $threshold['nilai_threshold'] ?></td>
				<td class="text-center">
					<a href="<?php echo base_url('pakar/threshold/ubah/'.$threshold['id_threshold']) ?>" class="btn btn-primary"><i class="far fa-edit"></i></a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<br>
<hr>
<div class="continer">
	<div class="panel panel-default">
		<p class="text-center text-info">Threshold adalah batas ambang suatu penyakit pada proses diagnosis. Threshold ini nantinya akan menampilkan hasil diagnosis dengan nilai certainty factor diatas nilai threshold.</p>
	</div>
</div>