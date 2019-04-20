<?php
session_start();
$servername = "127.0.0.1";
$username   = "root";
$database   = "db_arsip_sidang";
$password   = "";

$base_url   = "http://localhost/arsipsidang/";
$TOKEN      = md5("ibnurizqiaramadn");

$koneksi = new mysqli($servername, $username, $password, $database);

?>
