<h3>UBAH DETAIL</h3>
<hr>
<form method="post">

    <div class="form-group">
        <label>Nama Pengetahuan</label>
        <input readonly="" value="<?php echo $pengetahuan['nama_pengetahuan'] ?>" class="form-control">
        <input hidden name="id_pengetahuan" value="<?php echo $pengetahuan['id_pengetahuan'] ?>">
    </div> 

    <div class="form-group">
        <label>Nama Penyakit</label>
        <select name="id_gejala" class="form-control">
            <option value="">Pilih</option>
            <?php foreach ($gejala as $key => $value) : ?>
            <option value="<?php echo $value['id_gejala'] ?>" <?php if ($value['id_gejala']==$detail['id_gejala']) {
                echo "selected";} ?>>
                <?php echo $value['nama_gejala'] ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>

  <label>Status</label>
    <div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="AND" name="status_pengetahuan" <?php if ($detail['status_pengetahuan']=="AND"){ echo "checked";} ?>>
            <label class="form-check-label" for="status_pengetahuan">
                AND
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="OR" name="status_pengetahuan" <?php if ($detail['status_pengetahuan']=="OR"){ echo "checked";} ?>>
            <label class="form-check-label" for="status_pengetahuan">
                OR
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="THEN" name="status_pengetahuan" <?php if ($detail['status_pengetahuan']=="THEN"){ echo "checked";} ?>>
            <label class="form-check-label" for="status_pengetahuan">
                THEN
            </label>
        </div>
    </div>
    <button class="btn btn-primary">Simpan</button>
</form>