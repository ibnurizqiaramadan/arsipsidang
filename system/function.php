<?php
include './system/config.php';
function EscapeString($value)
{
  return mysqli_real_escape_string($GLOBALS['koneksi'], $value);
}
function Redirect($location)
{
  header("location:$location");
}

function base_url($url='')
{
  return $GLOBALS['base_url'] . $url;
}

function POST($input)
{
  return mysqli_real_escape_string($GLOBALS['koneksi'], htmlspecialchars(rtrim(ltrim($_POST[$input]))));
}

function GET($input)
{
  return mysqli_real_escape_string($GLOBALS['koneksi'], $_GET[$input]);
}

function run_query($sql)
{
  try {
    $result = mysqli_query($GLOBALS['koneksi'], $sql);
  } catch (Exception $e) {
    echo "Gagal : $e->getMessage()";
  }
  return $result;
}

function query_get_array($sql)
{
  return mysqli_fetch_array($sql);
}

function query_get_row($sql)
{
  return mysqli_fetch_assoc(run_query($sql));
}

function query_get_object($sql)
{
  return mysqli_fetch_object($sql);
}

function query_num_rows($sql)
{
  return mysqli_num_rows($sql);
}

function Page($menu, $submenu, $page)
{
  return $GLOBALS['base_url'] . "admin.php?menu=" . $menu . "&submenu=" . $submenu . "&page=" . $page;
}

?>
