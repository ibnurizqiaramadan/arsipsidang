<div class="col-md-12">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h2 class="box-title">Daftar Prasidang</h2>
      <a href="<?php echo Page('form', 'prasidang', 'pendaftaranprasidang'); ?>"><button class="btn btn-sm btn-info pull-right"><i class="fa fa-plus"></i> Baru</button></a>
    </div>
    <div class="box-body table-responsive no-padding">
      <div class="box-body">
        <table class="table table-bordered" id="table-list-prasidang">
          <thead>
            <tr>
              <th style="width: 20px;" class="text-center">No</th>
              <th class="text-center">Semester / Tahun</th>
              <th class="text-center">NIM</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Judul</th>
              <th class="text-center">Kode Pembimbing</th>
              <!-- <th>Nama Pembimbing</th> -->
              <th class="text-center">Tgl Prasidang</th>
              <th class="text-center">Tgl Sidang</th>
              <th style="width: 125px" class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $nim = 1218001; for ($i=0; $i < 100; $i++) { ?>
              <tr>
                <td><?php echo $i+1; ?></td>
                <td class="text-center">Genap / 2018-2019</td>
                <td class="text-center"><?php echo $nim++; ?></td>
                <td>Ibnu Rizqia Ramadan</td>
                <td>Hallo ini judul</td>
                <td class="text-center">122312</td>
                <!-- <td>Hallo ini nama Pembimbing</td> -->
                <td class="text-center">12/12/2019</td>
                <td class="text-center">12/12/2019</td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-info" name="button">Nilai</button>
                  <button type="button" class="btn btn-sm btn-warning" name="button">Edit</button>
                  <button type="button" class="btn btn-sm btn-danger" name="button">Hapus</button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th style="width: 30px" class="text-center">No</th>
              <th class="text-center">Semester / Tahun</th>
              <th class="text-center">NIM</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Judul</th>
              <th class="text-center">Kode Pembimbing</th>
              <!-- <th>Nama Pembimbing</th> -->
              <th class="text-center">Tgl Prasidang</th>
              <th class="text-center">Tgl Sidang</th>
              <th class="text-center">Aksi</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
