<?php

class Akun{
  private $koneksi;
  public function __construct(){
    global $dbh;
    $this->koneksi=$dbh;
  }
  
  public function auth($data){
    $sql = "SELECT * FROM akun WHERE username = ? AND pass = SHA1(MD5(SHA1(?)))";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($data);
    $rs=$ps->fetch();
    return $rs;
  }

  public function simpan($data){
    $sql="INSERT INTO AKUN (fullname, username, pass, role, foto)
    VALUES (?,?,SHA1(MD5(SHA1(?))),?,?)";
  $ps = $this->koneksi->prepare($sql);
	$ps->execute($data);
  }
}
