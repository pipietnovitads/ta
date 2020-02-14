<h3>TAMBAH DETAIL</h3>
<hr>
<?php if (validation_errors()) : ?>
<div class="alert alert-danger"><?php echo validation_errors() ?></div>
<?php endif ?>
<form method="post">
   <div class="form-group">
        <label>Nama pengetahuan</label>
        <input readonly="true" value="<?php echo $pengetahuan['nama_pengetahuan']?>" class="form-control">
        <input hidden name="id_pengetahuan" value="<?php echo $pengetahuan['id_pengetahuan'] ?>">
    </div>

    <div class="form-group">
        <label>Nama Gejala</label>
        <select name="id_gejala" class="form-control">
            <option value="">Pilih</option>
            <?php foreach ($gejala as $key => $value) : ?>
            <option value="<?php echo $value['id_gejala'] ?>"><?php echo $value['nama_gejala'] ?></option>
            <?php endforeach ?>
        </select>
    </div>

  <label>Status</label>
    <div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="AND" name="status_pengetahuan">
            <label class="form-check-label" for="detail_pengetahuan">
                AND
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="OR" name="status_pengetahuan">
            <label class="form-check-label" for="detail_pengetahuan">
                OR
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="THEN" name="status_pengetahuan">
            <label class="form-check-label" for="detail_pengetahuan">
                THEN
            </label>
        </div>
    </div>
    <button class="btn btn-primary">Simpan</button>
</form>