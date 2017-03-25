<?php
include 'modelInformasi.php';
include 'database.php';

include 'firebase.php';
include 'push.php';
/**
 * create by zayed elfasa
 */

class controllerInformasi
{
  function getInformasi() {
    $pdo = database::connect();
    $sql = "select id, judul, isi, jampost from informasi";
    $arr = [];
    $inc = 0;

    foreach ($pdo->query($sql) as $row) {

      $modelInformasi = new modelInformasi();
      $modelInformasi->setId($row['id']);
      $modelInformasi->setJudul($row['judul']);
      $modelInformasi->setIsi($row['isi']);
      $modelInformasi->setJamPost($row['jampost']);

      $jsonArrayObject = (array("id" => $modelInformasi->getId(), "judul" => $modelInformasi->getJudul(), "isi" => $modelInformasi->getIsi(), "jampost" => $modelInformasi->getJamPost()));
      $arr[$inc] = $jsonArrayObject;
      $inc++;
    }

    echo json_encode($arr, JSON_PRETTY_PRINT);
    database::disconnect();
  }

  function setInformasi($judul, $isi, $jamPost) {
    try {
      $pdo = database::connect();
      $sql = "insert into informasi (judul, isi, jampost) values ('".$judul."', '".$isi."', '".$jamPost."')";
      // use exec() because no results are returned
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->exec($sql);
      $returnArray = array("status" => "1", "message" => "New record created successfully");
      echo json_encode($returnArray, JSON_PRETTY_PRINT);
      database::disconnect();
    } catch(PDOException $e) {
      // echo $sql . "<br>" . $e->getMessage();
      $returnArray = array("status" => "0", "message" => $e->getMessage());
      echo json_encode($returnArray, JSON_PRETTY_PRINT);
    }
  }

  function setNotification($judul, $isi, $push_type) {
    $firebase = new Firebase();
    $push = new Push();
    $push->setTitle($judul);
    $push->setMessage($isi);
    $push->setImage('');
    $push->setIsBackground(FALSE);

    $json = '';
    $response = '';

    if ($push_type == 'topic') {
        $json = $push->getPush();
        $response = $firebase->sendToTopic('global', $json);
    } else if ($push_type == 'individual') {
        $json = $push->getPush();

        $pdo = database::connect();
        $sql = "select id, fcmid from fcmregid";

        foreach ($pdo->query($sql) as $row) {
          $regId = $row['fcmid'];
          $response = $firebase->send($regId, $json);

          echo $response;
        }
        database::disconnect();
    }
  }
}
