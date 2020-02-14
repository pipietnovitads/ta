<ol class="breadcrumb">
    <li><a href="<?php echo base_url("pakar/dashboard") ?>">Home</a></li>
    <li><a href="<?php echo base_url("pakar/threshold") ?>">Data Threshold</a></li>
    <li class="active">Ubah Threshold</li>
</ol>

<h3>UBAH NILAI THRESHOLD</h3>
<hr>
<form method="post">
	<div class="form-group">
		<label>Nilai Threshold</label>
		<input type="number" name="nilai_threshold" class="form-control" min="-1" max="1" step=".01"value="<?php echo $threshold['nilai_threshold'] ?>">
	</div>

	<div class="form-group">
		<button class="btn btn-primary">Simpan</button>
	</div>
</form>
