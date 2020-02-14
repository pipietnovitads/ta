<ol class="breadcrumb">
    <li><a href="<?php echo base_url("perawat/dashboard") ?>">Home</a></li>
    <li><a href="<?php echo base_url("perawat/pasien") ?>">Daftar Pasien</a></li>
    <li class="active">Detail Pasien</li>
</ol>

<h3>Detail Pasien</h3>

<div class="table-responsive">
	<table class="table table-striped table-bordered" id="thetable">
		<thead>
			<tr>
				<th>No</th>
				<th>Perawat</th>
				<th>Nama Pasien</th>
				<th>Tanggal Diagnosa</th>
				<th>Gejala</th>
				<th>Hasil</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($hasil as $key => $value): ?>	
				<tr>
					<td><?php echo $key+1 ?></td>
					<td><?php echo $value['nama_user'] ?></td>
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
								<li><?php echo $value_hasil['nama_penyakit']. " = " .$value_hasil['nilai_hasil'] ?></li>
							<?php endforeach ?>
						</ul>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

