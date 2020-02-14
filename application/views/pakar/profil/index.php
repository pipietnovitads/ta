<h3>Profil Dokter Gigi</h3>
<hr>
<br>
<?php if ($this->session->flashdata('berhasil')):?>
	<div class="alert alert-success"><?php echo $this->session->flashdata('berhasil'); ?></div>
	<meta http-equiv="refresh" content="1">
<?php endif ?>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<p class="text-center" style="padding-top: 15px">
				<img src="<?php echo base_url("assets/img/".$profil['gambar_user']) ?>" width="50%" alt="" class ="img-circle">
			</p>
		</div>
	</div>

	<div class="col-md-8">
		<table class="table table-bordered">
			<tr>
				<th width="15%">Nama</th>
				<th width="1%">:</th>
				<th class="text-left"><?php echo $profil['nama_user'] ?></th>
			</tr>
			<tr>
				<th>Username</th>
				<th>:</th>
				<th class="text-left"><?php echo $profil['username_user'] ?></th>
			</tr>
			<tr>
				<th>Level User</th>
				<th>:</th>
				<th class="text-left"><?php echo $profil['level_user'] ?></th>
			</tr>
		</table>
		<a href="<?php echo base_url("pakar/dashboard/ubah") ?>" class="btn btn-warning">Ubah Profil</a>
		<a href="<?php echo base_url("pakar/dashboard/ubahPassword") ?>" class="btn btn-primary">Ubah Password</a>
	</div>
</div>