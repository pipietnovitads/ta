<h3>PILIH PENYAKIT</h3>
<hr>
<?php if ($hasil): ?>
<form method="post">
	<div class="form-group">
		<label>Pilih Penyakit yang Sesuai</label>
		<?php foreach ($hasil as $key => $value): ?>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="hasil[<?php echo $value['id_penyakit'] ?>]" value="<?php echo $value['nilai_hasil'] ?>"> <?php echo $value['nama_penyakit']." = ".$value['nilai_hasil'] ?>
				</label>
			</div>
		<?php endforeach ?>
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Simpan</button>
	</div>
</form>
<?php else: ?>
	<div class="alert alert-danger">Penyakit Tidak Ditemukan</div>
<?php endif ?>