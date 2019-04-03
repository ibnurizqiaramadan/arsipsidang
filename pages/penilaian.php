<div class="col-md-12">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Penilaian</h3>
    </div>
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <label for="">Nim</label>
              <input type="number" name="" class="form-control text-center" id="" placeholder="Nim" value="1218016" disabled>
            </div>
            <div class="col-md-10">
              <label for="">Nama</label>
              <input type="text" name="" class="form-control" id="" placeholder="Nama Lengkap" value="Ibnu Rizqia Ramadan" disabled>
            </div>
          </div>
        </div>
        <!-- <div class="form-group">
          <div class="row">

          </div>
        </div> -->
        <div class="form-group">
          <label for="">Judul</label>
          <input type="text" name="" class="form-control" id="" placeholder="Judul" value="Ini adalah judul gblk rayandra" disabled>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <label for="">Kode Pembimbing</label>
              <input type="number" name="" class="form-control" id="" placeholder="Kode Pembimbing" value="1218016" disabled>
            </div>
            <div class="col-md-10">
              <label for="">Nilai</label>
              <input type="number" name="" class="form-control" id="" placeholder="Nilai">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <label for="">Kode Penguji 1</label>
              <select class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="col-md-10">
              <label for="">Nilai</label>
              <input type="number" name="" class="form-control" id="" placeholder="Nilai">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <label for="">Kode Penguji 2</label>
              <select class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="col-md-10">
              <label for="">Nilai</label>
              <input type="number" name="" class="form-control" id="" placeholder="Nilai">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <label for="">Kode Penguji 3</label>
              <select class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="col-md-10">
              <label for="">Nilai</label>
              <input type="number" name="" class="form-control" id="" placeholder="Nilai">
            </div>
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" name="simpan" class="btn btn-primary ">Simpan</button>
        <a href="<?php echo Page('list', 'nilai', 'listnilai'); ?>"><button type="button" name="batal" class="btn btn-danger ">Batal</button></a>
      </div>
    </form>
  </div>
</div>
