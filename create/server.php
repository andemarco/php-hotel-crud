<?php
  include __DIR__ . '/../database.php';

  if (empty($_POST['beds'])) {
    die('Non hai inserito il numero di letti');
  }
  if (empty($_POST['floor'])) {
    die('Non hai inserito il piano');
  }
  if (empty($_POST['room_number'])) {
    die('Non hai inserito il numero di stanza');
  }


  $beds = $_POST['beds'];
  $floor = $_POST['floor'];
  $roomNumber = $_POST['room_number'];

  $sql = "INSERT INTO `stanze` (`beds`, `floor`, `room_number`, `created_at`, `updated_at`) VALUES ($beds,$floor ,$roomNumber, NOW(), NOW())";

  $result = $conn->query($sql);
  $last_id = $conn->insert_id;

  if($result) {
    // echo 'OK';
    header("Location: $homePage/show/show.php?id=$last_id");
  } else {
    echo 'KO';
  }

  $conn->close();
?>
