<?php

class Agama{
  private $koneksi;
  public function __construct(){
    global $dbh;
    $this->koneksi = $dbh;
  }
  public function index(){
    $sql = "SELECT * FROM agama";
    $ps = $this->koneksi->prepare($sql);
		$ps->execute();
		$rs = $ps->fetchAll();
		return $rs;
  }
}