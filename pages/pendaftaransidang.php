<div class="col-md-12">
  <div class="box box-primary">
    <div class="box-header with-border">
      <?php
      $id = explode(".", GET('id'));
      $sql = "SELECT * FROM t_arsip WHERE md5(id) = '$id[0]'";
      $data_ = query_get_row($sql);
        if (isset($_GET['action'])) {
          $action = $_GET['action'];
          if ($action == "edit") {
            $act = base_url('proses.php?action=editprasidang&id='. $id[0]);
            $title = "Edit Pendaftaran Sidang";
          }
        } else {
          error_reporting(0);
          $act = base_url('proses.php?action=tambahprasidang');
          $title = "Pendaftaran Sidang";
        }
      ?>
      <h3 class="box-title"><?php echo $title; ?></h3>
    </div>
    <form action="<?php echo base_url('proses.php?action=tambahprasidang'); ?>" method="post" role="form">
      <input type="hidden" name="token_" value="<?php echo $_SESSION['token']; ?>">
      <div class="box-body">
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <label for="">Semester</label>
              <select name="semester" class="form-control">
                <option selected><?php
                $semester = explode(" / ", $data_['semester']);
                 echo $semester[0];
                ?></option>
                <option disabled>Pilih</option>
                <option>Genap</option>
                <option>Ganjil</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="">Tahun Akademik</label>
              <select ORDER name="tahun" class="form-control">
                <?php $tahun = explode(" - ", $semester[1]) ?>
                <option><?php echo $semester[1] ?></option>
                <option><?php echo ($tahun[0] + 1) . " - " . ($tahun[1] + 1); ?></option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="">Kode Pembimbing</label>
              <select id="kdpem" onchange="ambinamapem()" name="kdpembimbing" class="form-control">
                <option selected disabled>Pilih</option>
                <?php
                  $sql = "SELECT * FROM t_pembimbing";
                  $query = run_query($sql);
                  while ($data = query_get_array($query)) {
                  ?>
                  <option><?php echo $data['kd_pembimbing']; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="col-md-4">
              <label for="">Nama Pembimbing</label>
              <input type="text" name="namapem" placeholder="Nama Pembimbing" disabled class="form-control" id="namapem" placeholder="" required>
            </div>
            <div class="col-md-2">
              <label for="">Tanggal Prasidang</label>
              <input type="date" name="tglprasidang" class="form-control" id="" placeholder="" value="<?php echo $data_['tanggal_prasidang']; ?>" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <label for="">Nim</label>
              <input type="number" name="nim" class="form-control" id="" placeholder="Nim" value="<?php echo $data_['nim']; ?>" required>
            </div>
            <div class="col-md-10">
              <label for="">Nama</label>
              <input type="text" name="nama" class="form-control" id="" placeholder="Nama Lengkap" value="<?php echo $data_['nama']; ?>" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="">Judul</label>
          <input type="text" name="judul" class="form-control" id="" placeholder="Judul" value="<?php echo $data_['judul']; ?>" required>
        </div>
        <div class="form-group">
          <label for="">Keterangan</label>
          <textarea name="ket" class="form-control" rows="3" placeholder="Keterangan . . ."><?php echo $data_['keterangan']; ?></textarea>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="">Krs | file.pdf</label>
              <input name="krs" type="file" id="" required>
            </div>
            <div class="col-md-6">
              <label for="">Transkrip | file.pdf</label>
              <input name="transkrip" type="file" id="" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <label for="">Nilai D</label>
              <input class="form-control" type="number" onchange="hitunghasil()" name="nilaid" id="nilaid" value="0" required>
            </div>
            <div class="col-md-2">
              <label for="">Nilai E</label>
              <input class="form-control" type="number" onchange="hitunghasil()" name="nilaie" id="nilaie" value="0" required>
            </div>
            <div class="col-md-2">
              <label for="">SKS</label>
              <input class="form-control" type="number" onchange="hitunghasil()" name="totalsks" id="totalsks" value="0" required>
            </div>
            <div class="col-md-6">
              <label for="">Keterangan</label>
              <input type="text" name="tglprasidang" class="form-control" id="keterangan" placeholder="" value="Tidak dapat diterima" required disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" name="simpan" class="btn btn-primary" id="btnsimpan" disabled>Simpan</button>
        <a href="<?php echo Page('list', 'prasidang', 'listprasidang'); ?>"><button type="button" name="simpan" class="btn btn-danger ">Batal</button></a>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
  function ambinamapem() {
    kdpem = document.getElementById('kdpem').value;
    namapem = document.getElementById('namapem');
    <?php
      $sql = "SELECT * FROM t_pembimbing";
      $query = run_query($sql);
      while ($data = query_get_array($query)) {
      ?>
      if (kdpem == "<?php echo $data['kd_pembimbing']; ?>") {
        namapem.value = "<?php echo $data['nama_pembimbing']; ?>";
      }
    <?php } ?>
  }

  function hitunghasil() {
    var nilaid = document.getElementById('nilaid').value;
    var nilaie = document.getElementById('nilaie').value;
    var totalsks = document.getElementById('totalsks').value;
    var Keterangan = document.getElementById('keterangan');
    var btnsimpan = document.getElementById('btnsimpan');
    if (nilaid == 0 && nilaie == 0 && totalsks >= 135) {
        Keterangan.value = "Dapat Diterima";
        btnsimpan.disabled = false;
    } else {
        Keterangan.value = "Tidak dapat diterima";
        btnsimpan.disabled = true;
    }
  }
</script>
