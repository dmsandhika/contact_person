<?php
include_once 'koneksi.php';
include_once 'models/Akun.php';

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$role = $_POST['role'];
$foto = $_POST['foto'];
$tombol = $_POST['proses'];

$data =[$fullname, $username, $pass, $role, $foto];

$obj_akun = new Akun();
switch ($tombol){
  case 'simpan': $obj_akun->simpan($data); break;

  default:header('location:login.php'); break;
}
header('location:registerdone.php');