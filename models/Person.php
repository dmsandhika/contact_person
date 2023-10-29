<?php

class Person{
  private $koneksi;
  public function __construct(){
    global $dbh;
    $this->koneksi = $dbh;
  }
  public function index(){
    $sql = "SELECT person.*, agama.nama AS agama
    FROM person INNER JOIN agama
    ON agama.id = person.idagama";
    $ps = $this->koneksi->prepare($sql);
		$ps->execute();
		$rs = $ps->fetchAll();
		return $rs;
  }

  public function getPerson($id){
    $sql = "SELECT person.*, agama.nama AS agama
    FROM person INNER JOIN agama
    ON agama.id = person.idagama
    WHERE person.id = ?";
    //PDO prepare statement
$ps = $this->koneksi->prepare($sql);
$ps->execute([$id]);
$rs = $ps->fetch();
return $rs;
}

  public function simpan($data){
    $sql = "INSERT INTO person (nama, gender, tempatlahir, tgllahir, alamat, idagama, telp, email, sosmed, univ, foto, quotes)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    $ps = $this->koneksi->prepare($sql);
		$ps->execute($data);
  }

  public function ubah($data){
    $sql = "UPDATE person SET nama=?, gender=?, tempatlahir=?, tgllahir=?, alamat=?, idagama=?, telp=?, email=?, sosmed=?, univ=?, foto=?, quotes=?
    WHERE id=?";
    $ps = $this->koneksi->prepare($sql);
		$ps->execute($data);

  }

  public function hapus($id){
    $sql = "DELETE FROM person WHERE id = ?";
    $ps = $this->koneksi->prepare($sql);
		$ps->execute([$id]);
  }

  public function cari($keyword){
    $sql = "SELECT person.*, agama.nama AS agama
    FROM person INNER JOIN agama
    ON agama.id = person.idagama
    WHERE person.nama LIKE '%$keyword%' OR
    person.telp LIKE '%$keyword%' OR
    person.email LIKE '%$keyword%' OR
    person.sosmed LIKE '%$keyword%' OR
    person.univ LIKE '%$keyword%' OR
    agama.nama LIKE '%$keyword%'";
    $rs = $this->koneksi->query($sql);
    return $rs;
  }
}