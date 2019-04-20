<div class="col-md-12">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h2 class="box-title">Daftar Prasidang</h2>
      <a href="<?php echo Page('form', 'prasidang', 'pendaftaranprasidang'); ?>"><button class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> Baru</button></a>
    </div>
    <div class="box-body table-responsive no-padding">
      <div class="box-body">
        <table class="table table-bordered" id="table-list-prasidang">
          <thead>
            <tr>
              <th style="width: 20px;" class="text-center">No</th>
              <th style="width: 110px;" class="text-center">Semester / Tahun</th>
              <th class="text-center">NIM</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Judul</th>
              <th class="text-center">Kode Pembimbing</th>
              <!-- <th>Nama Pembimbing</th> -->
              <th class="text-center">Tgl Prasidang</th>
              <!-- <th class="text-center">Tgl Sidang</th> -->
              <th style="width: 100px" class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i=1;
            $query = run_query("SELECT * FROM t_arsip WHERE t_arsip.delete = 'N' ORDER BY id DESC");
            while($data = query_get_array($query)) { ?>
              <tr>
                <td><?php echo $i++; ?></td>
                <td class="text-center"><?php echo $data['semester']; ?></td>
                <td class="text-center"><?php echo $data['nim']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['judul']; ?></td>
                <td class="text-center"><?php echo $data['kd_pembimbing']; ?></td>
                <!-- <td>Hallo ini nama Pembimbing</td> -->
                <td class="text-center"><?php echo $data['tanggal_prasidang']; ?></td>
                <!-- <td class="text-center"><?php echo $data['tanggal_sidang']; ?></td> -->
                <td class="text-center">
                  <?php if ($data['nilaitotal'] > 0) { ?>
                    <a href="<?php echo Page('form', 'sidang','pendaftaransidang'). "&id=" . md5($data['id']) .".".$_SESSION['token'] ?>"><button type="submit" class="btn btn-xs btn-success" name="button">Sidang</button></a>
                    <a href="<?php echo base_url('proses.php?action=hapuspresidang') . "&id=" . md5($data['id']) .".".$_SESSION['token'] ?>"><button type="button" class="btn btn-xs btn-danger" name="button">Hapus</button></a>
                  <?php } else { ?>
                    <a href="<?php echo Page('form', 'penilaian','penilaian'). "&id=" . md5($data['id']) .".".$_SESSION['token'] ?>"><button type="submit" class="btn btn-xs btn-info" name="button">Nilai</button></a>
                    <a href="<?php echo Page('form', 'prasidang','pendaftaranprasidang'). "&action=edit&id=" . md5($data['id']) .".".$_SESSION['token'] ?>"><button type="button" class="btn btn-xs btn-warning" name="button">Edit</button></a>
                    <a href="<?php echo base_url('proses.php?action=hapuspresidang') . "&id=" . md5($data['id']) .".".$_SESSION['token'] ?>"><button type="button" class="btn btn-xs btn-danger" name="button">Hapus</button></a>
                  <?php } ?>
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
              <!-- <th class="text-center">Tgl Sidang</th> -->
              <th class="text-center">Aksi</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
