<?php
  include __DIR__ . '/../database.php';

  $roomId = $_POST['id'];
  $beds = $_POST['beds'];
  $floor = $_POST['floor'];
  $roomNumber = $_POST['room_number'];


  if (empty($_POST['id'])) {
    die('Id non inserito');
  }
  if (empty($_POST['beds'])) {
    die('Non hai inserito il numero di letti');
  }
  if (empty($_POST['floor'])) {
    die('Non hai inserito il piano');
  }
  if (empty($_POST['room_number'])) {
    die('Non hai inserito il numero di stanza');
  }

  $sql = "UPDATE `stanze` SET `room_number` = $roomNumber, `beds` = $beds, `floor` = $floor, `updated_at` = NOW() WHERE id = $roomId";


  $result = $conn->query($sql);

  if($result) {
    // echo 'OK';
    header("Location: $homePage/show/show.php?id=$roomId");
  } else {
    echo 'KO';
  }

  $conn->close();
?>
