<ol class="breadcrumb">
    <li><a href="<?php echo base_url("perawat/dashboard") ?>">Home</a></li>
    <li class="active">Diagnosis</li>
</ol>

<h3>DIAGNOSIS</h3>
<hr>
<?php echo $this->session->flashdata('kosong'); ?>
<?php if (validation_errors()) : ?>
<div class="alert alert-danger"><?php echo validation_errors() ?></div>
<meta http-equiv="refresh" content="1"> 		
<?php endif ?>

<form method="post">
	<div class="form-group">
		<label>Nama Pasien</label>
		<select class="form-control" name="id_pasien">
			<option value="">Pilih</option>
			<?php foreach ($pasien as $key => $value): ?>
				<option value="<?php echo $value['id_pasien'] ?>"><?php echo $value['nama_pasien'] ?></option>
			<?php endforeach ?>
		</select>
	</div>

	<div method="post">
		<label>Gejala</label>
		<table class="table table-bordered table-striped" id="thetable">
			<?php $no=1 ?>
			<?php foreach ($gejala as $key => $value): ?>
				
			<tr>
				<td><?php echo $no++ ?></td>
				<!-- sesuai dengan array -->
				<td><?php echo $value['nama'] ?></td>
				<td width="70%">
					<?php foreach ($value['detail'] as $key_detail => $data_detail): ?>
						<label class="checkbox-inline">
							<!-- name untuk menyimpan banyak nilai dari satu gejala, perulangannya harus beda nama-->
							<input type="radio" value="<?php echo $data_detail['nilai_detail_gejala'] ?>" name="id_detail[<?php echo $key ?>]"> <?php echo $data_detail['nama_detail_gejala'] ?>
						</label>
					<?php endforeach ?>
				</td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>

	<button class="btn btn-primary">Simpan</button>
</form>