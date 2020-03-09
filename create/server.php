<?php
  include __DIR__ . '/../database.php';

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
