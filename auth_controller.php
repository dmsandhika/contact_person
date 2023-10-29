<?php
session_start();
include_once 'koneksi.php';
include_once 'models/Akun.php';

$username = $_POST['username'];
$pass = $_POST['pass'];

$data =[$username, $pass];

$obj_akun = new Akun();
$rs= $obj_akun->auth($data);
if(!empty($rs)){
  $_SESSION['AKUN'] = $rs; 
  header('location:index.php?hal=person_list');
}
else{ 
  echo '<script>alert("Username/Password Anda Salah!!!");history.go(-1);</script>';
}