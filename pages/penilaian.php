<div class="col-md-12">
  <div class="box box-primary">
    <div class="box-header with-border">
      <?php
        error_reporting(0);
        if (isset($_GET['id'])) {
          $id = explode(".",$_GET['id']);
          $sql = "SELECT * FROM t_arsip WHERE MD5(id) = '$id[0]'";
          $data = query_get_row($sql);
          $jml = query_num_rows($sql);
          if ($jml > 0) {
            $stat = "";
          } else {
            $stat = "disabled";
          }
        ?>
        <h3 class="box-title">Penilaian</h3>
      <?php } else {
        $stat = "disabled"?>
        <h3 class="box-title">Penilaian (Pilih data terlebih dahulu !)</h3>
      <?php } ?>
    </div>
    <form action="<?php echo base_url('proses.php?action=tambahnilai'); ?>" method="post" role="form">
      <input type="hidden" name="token_" value="<?php echo $id[1]; ?>">
      <input type="hidden" name="id" value="<?php echo $id[0]; ?>">
      <div class="box-body">
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <label for="">Nim</label>
              <input type="number" name="nim" class="form-control text-center" id="" placeholder="Nim" value="<?php echo $data['nim']; ?>" disabled>
            </div>
            <div class="col-md-10">
              <label for="">Nama</label>
              <input type="text" name="" class="form-control" id="" placeholder="Nama Lengkap" value="<?php echo $data['nama']; ?>" disabled>
            </div>
          </div>
        </div>
        <!-- <div class="form-group">
          <div class="row">

          </div>
        </div> -->
        <div class="form-group">
          <label for="">Judul</label>
          <input type="text" name="" class="form-control" id="" placeholder="Judul" value="<?php echo $data['judul']; ?>" disabled>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <label for="">Kode Pembimbing</label>
              <input type="text" name="" class="form-control" id="" placeholder="Kode Pembimbing" value="<?php echo $data['kd_pembimbing']; ?>" disabled>
            </div>
            <div class="col-md-10">
              <label for="">Nilai</label>
              <input type="number" name="nilaipem" class="form-control" id="nilaipem" onchange="hitunghasil()" value="0" placeholder="Nilai">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <label for="">Kode Penguji 1</label>
              <select name="kdpeng1" class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="col-md-10">
              <label for="">Nilai</label>
              <input type="number" name="nilaipeng1" class="form-control" id="nilaipeng1" onchange="hitunghasil()" value="0" placeholder="Nilai">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <label for="">Kode Penguji 2</label>
              <select name="kdpeng2" class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="col-md-10">
              <label for="">Nilai</label>
              <input type="number" name="nilaipeng2" class="form-control" id="nilaipeng2" onchange="hitunghasil()" value="0" placeholder="Nilai">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <label for="">Kode Penguji 3</label>
              <select name="kdpeng3" class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="col-md-10">
              <label for="">Nilai</label>
              <input type="number" name="nilaipeng3" class="form-control" id="nilaipeng3" onchange="hitunghasil()" value="0" placeholder="Nilai">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <label for="">Total Nilai</label>
              <input type="number" name="" class="form-control text-center" id="totalnilai2" placeholder="Total" value="0" disabled>
              <input type="hidden" name="nilaitotal" id="totalnilai">
            </div>
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" id="btnsimpan" name="simpan" class="btn btn-primary" <?php echo "$stat"; ?> disabled>Simpan</button>
        <a href="<?php echo Page('list', 'nilai', 'listnilai'); ?>"><button type="button" name="batal" class="btn btn-danger ">Batal</button></a>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
  function hitunghasil() {
    var nilaipem = document.getElementById('nilaipem').value * 40 / 100;
    var nilaipeng1 = document.getElementById('nilaipeng1').value * 20 / 100;
    var nilaipeng2 = document.getElementById('nilaipeng2').value * 20 / 100;
    var nilaipeng3 = document.getElementById('nilaipeng3').value * 20 / 100;
    var totalnilai = document.getElementById('totalnilai');
    var totalnilai2 = document.getElementById('totalnilai2');
    var btnsimpan = document.getElementById('btnsimpan');
    var total = nilaipem + nilaipeng1 + nilaipeng2 + nilaipeng3;
    totalnilai.value = total;
    totalnilai2.value = total;
    btnsimpan.disabled = false;
  }
</script>
