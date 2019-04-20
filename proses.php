<?php

// INCLUDE FUNCTION & CONFIG //
include './system/function.php';

// TIDAK MENAMPILKAN ERROR KALAU ERROR ;V //
error_reporting(0);

// MENGAMBIL ACTION //
$action = $_GET['action'];

// PROSES CEK LOGIN //
if (isset($action)) {
  if ($action == "login") {
    $user = POST('username');
    $pass = md5(POST('password'));
    $sql = "SELECT * FROM t_user WHERE username = '$user' AND password = '$pass'";
    $jml = query_num_rows($sql);
    if ($jml > 0) {
      $_SESSION['username'] = $user;
      $_SESSION['token'] = md5($user . $TOKEN);
      redirect(base_url('admin.php'));
    } else {
      redirect(base_url('?gagal=1'));
    }
  }

  // PROSES LOGOUT //
  if ($action == "logout") {
    $tokenin = POST('token__');
    if ($tokenin == $_SESSION['token']) {
      session_destroy();
      redirect(base_url());
    } else {
      show_404();
    }
  }

  // PROSES TAMBAH PRASIDANG //
  if ($action == "tambahprasidang") {
    if (isset($_POST['token_'])) {
      $token = POST('token_');
      if ($token == $_SESSION['token']) {
        $tanggaldidang = date(POST('tglprasidang'));
        $tanggaldidang = strtotime(date("Y-m-d", strtotime($tanggaldidang)) . " +1 month");
        $tanggaldidang = date("Y-m-d",$tanggaldidang);
        $data = array(
          'semester'          => POST('semester') . " / " . POST('tahun'),
          'nim'               => POST('nim'),
          'nama'              => POST('nama'),
          'judul'             => POST('judul'),
          'kd_pembimbing'     => POST('kdpembimbing'),
          'tanggal_prasidang' => POST('tglprasidang'),
          'tanggal_sidang'    => $tanggaldidang,
          'keterangan'        => POST('ket'),
          'krs'               => POST('krs'),
          'transkrip'         => POST('transkrip'),
          'sks'               => POST('totalsks'),
          'nilaid'            => POST('nilaid'),
          'nilaie'            => POST('nilaie')
        );
        db_insert('t_arsip', $data);
        redirect(Page('list', 'prasidang', 'listprasidang'));
      }
    } else {
      show_404();
    }
  }

  if ($action == "editprasidang") {
    if (isset($_POST['token_'])) {
      $token = POST('token_');
      if ($token == $_SESSION['token']) {
        $tanggaldidang = date(POST('tglprasidang'));
        $tanggaldidang = strtotime(date("Y-m-d", strtotime($tanggaldidang)) . " +1 month");
        $tanggaldidang = date("Y-m-d",$tanggaldidang);
        $data = array(
          'semester'          => POST('semester') . " / " . POST('tahun'),
          'nim'               => POST('nim'),
          'nama'              => POST('nama'),
          'judul'             => POST('judul'),
          'kd_pembimbing'     => POST('kdpembimbing'),
          'tanggal_prasidang' => POST('tglprasidang'),
          'tanggal_sidang'    => $tanggaldidang,
          'keterangan'        => POST('ket'),
          'krs'               => POST('krs'),
          'transkrip'         => POST('transkrip'),
          'sks'               => POST('totalsks'),
          'nilaid'            => POST('nilaid'),
          'nilaie'            => POST('nilaie')
        );
        $where = array('md5(id)' => GET('id'));
        db_update('t_arsip', $data, $where);
        redirect(Page('list', 'prasidang', 'listprasidang'));
      }
    } else {
      show_404();
    }
  }

  // PROSES HAPUS PRASIDANG (TEMPORARY) //
  // HANYA MENGUBAH STATUS DELETE MENJADI 'Y' //
  if ($action == "hapuspresidang") {
    if (isset($_GET['id'])) {
      $id = explode('.', GET('id'));
      if ($id[1] == $_SESSION['token']) {
        $sql = "UPDATE t_arsip SET t_arsip.delete = 'Y' WHERE md5(id) = '$id[0]'";
        $query = run_query($sql);
        if ($query) {
          redirect(Page('list', 'prasidang', 'listprasidang'));
        }
      } else {
        show_404();
      }
    } else {
      show_404();
    }
  }

  if ($action == "tambahnilai") {
    if (isset($_POST['token_'])) {
      $token = POST('token_');
      if ($token == $_SESSION['token']) {
        $id = POST('id');
        $data = array(
          'kd_penguji1' => POST('kdpeng1'),
          'kd_penguji2' => POST('kdpeng2'),
          'kd_penguji3' => POST('kdpeng3'),
          'nilaipem'    => POST('nilaipem'),
          'nilaipeng1'  => POST('nilaipeng1'),
          'nilaipeng2'  => POST('nilaipeng2'),
          'nilaipeng3'  => POST('nilaipeng3'),
          'nilaitotal'  => POST('nilaitotal')
        );
        $where = array('md5(id)' => $id);
        db_update('t_arsip', $data, $where);
        redirect(Page('list', 'prasidang', 'listprasidang'));
      }
    } else {
      show_404();
    }
  }

} else {
  // MEET HAI :) //
  // echo "Hai :)";
  show_404();
}
 ?>
