<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
    <li><a href="<?php echo base_url("pakar/pasien") ?>">Daftar Pasien</a></li>
    <li class="active">Detail Pasien</li>
</ol>
<h3>DETAIL PASIEN </h3>
<hr>

<div class="table-responsive">
	<table class="table table-striped table-bordered" id="thetable">
		<thead>
			<tr>
				<th>NO</th>
				<th>NOMER PASIEN</th>
				<th>NAMA PASIEN</th>
				<th>TANGGAL PERIKSA</th>
				<th width="30%">GEJALA</th>
				<th>HASIL DIAGNOSA</th>
				<th>NAMA PERAWAT</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($hasil as $key => $value): ?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['nomer_pasien'] ?></td>
				<td><?php echo $value['nama_pasien'] ?></td>
				<td><?php echo $value['tgl_diagnosa'] ?></td>
				<td>
						<ul>
							<?php foreach ($value['gejala'] as $key => $value_gejala): ?>
								<li><?php echo $value_gejala['nama_gejala']?></li>
								<!-- . " = " . $value_gejala['nilai_detail_diagnosa']  -->
							<?php endforeach ?>
						</ul>
					</td>
				<td>
					<ul>
						<?php foreach ($value['diagnosa'] as $key_hasil => $value_hasil): ?>
							<li><?php echo $value_hasil['nama_penyakit']." = ".$value_hasil['nilai_hasil'] ?></li>
						<?php endforeach ?>
					</ul>
				</td>
				<td><?php echo $value['nama_user'] ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

<a href="<?php echo base_url('pakar/pasien/index') ?>" class="btn btn-danger">Kembali</a>


