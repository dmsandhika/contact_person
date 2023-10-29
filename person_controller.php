<?php
include_once 'koneksi.php';
include_once 'models/Person.php';

$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tempatlahir = $_POST['tempatlahir'];
$tgllahir = $_POST['tgllahir'];
$alamat = $_POST['alamat'];
$idagama = $_POST['idagama'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$sosmed = $_POST['sosmed'];
$univ = $_POST['univ'];
$foto = $_POST['foto'];
$quotes = $_POST['quotes'];
$tombol = $_POST ['proses'];

$data = [
  $nama, $gender, $tempatlahir, $tgllahir, $alamat, $idagama, $telp, $email,
   $sosmed, $univ, $foto, $quotes
];

$obj_person = new Person();
switch($tombol){
  case 'simpan': $obj_person->simpan($data); break;
  case 'ubah' :
    $data[] = $_POST['idx'];
        $obj_person->ubah($data); break;
  case 'hapus' : $obj_person->hapus($_POST['id']); break;

  default: header('location:index.php?hal=person_list'); break;
}
header('location:index.php?hal=person_list');

$tombol_cari = $_GET['proses_cari'];

if(isset($tombol_cari)){
    $obj_person->cari($_GET['keyword']); 
    header('location:index.php?hal=person_cari');
}