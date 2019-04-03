<?php
$servername = "127.0.0.1";
$username   = "root";
$database   = "db_arsip_sidang";
$password   = "";
$base_url   = "http://localhost/arsipsidang/";
$token      = md5("ibnurizqiaramadan");

$koneksi = new mysqli($servername, $username, $password, $database);

$GLOBALS['koneksi']   = $koneksi;
$GLOBALS['base_url']  = $base_url;

?>
