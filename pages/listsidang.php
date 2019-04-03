<div class="col-md-12">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h2 class="box-title">Daftar Sidang</h2>
      <button class="btn btn-sm btn-info pull-right"><i class="fa fa-plus"></i> Baru</button>
    </div>
    <div class="box-body table-responsive no-padding">
      <div class="box-body">
        <table class="table table-bordered" id="table-list-prasidang">
          <thead>
            <tr>
              <th style="width: 30px" class="text-center">No</th>
              <th class="text-center">Semester / Tahun</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>Judul</th>
              <th>Kode Pembimbing</th>
              <th>Nama Pembimbing</th>
              <th>Tanggal Prasidang</th>
              <th>Tanggal Sidang</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0; $i < 3; $i++) { ?>
              <tr>
                <td><?php echo $i+1; ?></td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
              </tr>
            <?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th style="width: 30px" class="text-center">No</th>
              <th class="text-center">Semester / Tahun</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>Judul</th>
              <th>Kode Pembimbing</th>
              <th>Nama Pembimbing</th>
              <th>Tanggal Prasidang</th>
              <th>Tanggal Sidang</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
