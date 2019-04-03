<div class="col-md-12">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Pendaftaran Prasidang</h3>
    </div>
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          <div class="row">
            <div class="col-md-4">
              <label for="">Semester / Tahun Akademik</label>
              <select class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="">Kode Pembimbing</label>
              <select class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="">Tanggal Prasidang</label>
              <input type="date" name="" class="form-control" id="" placeholder="" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <label for="">Nim</label>
              <input type="number" name="" class="form-control" id="" placeholder="Nim" required>
            </div>
            <div class="col-md-10">
              <label for="">Nama</label>
              <input type="text" name="" class="form-control" id="" placeholder="Nama Lengkap" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="">Judul</label>
          <input type="text" name="" class="form-control" id="" placeholder="Judul" required>
        </div>
        <div class="form-group">
          <label for="">Keterangan</label>
          <textarea class="form-control" rows="3" placeholder="Keterangan . . ."></textarea>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="">Krs | file.pdf</label>
              <input name="krs" type="file" id="" required>
            </div>
            <div class="col-md-6">
              <label for="">Transkrip | file.pdf</label>
              <input name="krs" type="file" id="" required>
            </div>
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" name="simpan" class="btn btn-primary ">Simpan</button>
        <a href="<?php echo Page('list', 'prasidang', 'listprasidang'); ?>"><button type="button" name="simpan" class="btn btn-danger ">Batal</button></a>
      </div>
    </form>
  </div>
</div>
