<h3>HASIL DIAGNOSIS</h3>
<hr>
<table class="table table-bordered">
	<tr>
		<th width="20%">Nomer Pasien</th>
		<th width="1%">:</th>
		<td><?php echo $diagnosa['nomer_pasien'] ?></td>
	</tr>

	<tr>
		<th>Nama Pasien</th>
		<th>:</th>
		<td><?php echo $diagnosa['nama_pasien'] ?></td>
	</tr>

	<tr>
		<th>Alergi</th>
		<th>:</th>
		<td><?php echo $diagnosa['alergi_pasien'] ?></td>
	</tr>

	<tr>
		<th>Gejala</th>
		<th>:</th>
		<td>
			<ul>
				<?php foreach ($detail as $key => $value): ?>
					<li><?php echo $value['nama_gejala'] ?></li>
					<!-- $value['nilai_detail_gejala'] -->
				<?php endforeach ?>
			</ul>
		</td>
	</tr>
	<?php foreach ($hasil as $key => $value): ?>
		
	<tr class="bg-info">
		<th colspan="3">Hasil <?php echo $key+1 ." : Penyakit ".$value['nama_penyakit'] ?></th>
	</tr>

	<tr>
		<th>Nilai Hasil</th>
		<th>:</th>
		<td><?php echo $value['nilai_hasil'] ?></td>
	</tr>

	<tr>
		<th>Definisi</th>
		<th>:</th>
		<td><?php echo $value['definisi_penyakit'] ?></td>
	</tr>

	<tr>
		<th>Saran Solusi</th>
		<th>:</th>
		<td><?php echo $value['solusi_penyakit'] ?></td>
	</tr>

	<tr>
		<th>Saran Pencegahan</th>
		<th>:</th>
		<td><?php echo $value['pencegahan_penyakit'] ?></td>
	</tr>
	<?php endforeach ?>

</table>
	<a href="<?php echo base_url('perawat/diagnosis') ?>" class="btn btn-danger">Kembali</a>