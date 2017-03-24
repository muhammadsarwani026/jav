<?php
/**
 * create by zayed elfasa
 */
class modelInformasi
{
  var $id;
  var $judul;
  var $isi;
  var $jamPost;

  public function __construct() {

  }

  public function __construct1($id, $judul, $isi, $jamPost)
  {
    $this->id = $id;
    $this->judul = $judul;
    $this->isi = $isi;
    $this->jamPost = $jamPost;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setJudul($judul) {
    $this->judul = $judul;
  }

  public function setIsi($isi) {
    $this->isi = $isi;
  }

  public function setJamPost($jamPost) {
    $this->jamPost = $jamPost;
  }

  public function getId() {
    return $this->id;
  }

  public function getJudul() {
    return $this->judul;
  }

  public function getIsi() {
    return $this->isi;
  }

  public function getJamPost() {
    return $this->jamPost;
  }
}
