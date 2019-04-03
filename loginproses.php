<?php
include './system/function.php';

$user = POST('username');
$pass = md5(POST('password'));

$sql = "SELECT * FROM t_user WHERE username = '$user' AND password = '$pass'";
$query = run_query($sql);
$jml = query_num_rows($query);
if ($jml > 0) {
  redirect(base_url('admin.php'));
} else {
  redirect(base_url('?gagal=1'));
}
 ?>
