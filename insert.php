<?php
include 'controllerInformasi.php';
$controllerInformasi = new controllerInformasi();

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$jampost = $_POST['jampost'];
$controllerInformasi->setInformasi($judul, $isi, $jampost);
$controllerInformasi->setNotification($judul, $isi, "individual");
