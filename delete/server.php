<?php
  include __DIR__ . '/../database.php';

  if(empty($_POST['id'])) {
      die('Id non corretto');
    }

    $roomId = $_POST['id'];

    $sql = "SELECT * FROM `stanze` WHERE `id`='$roomId'";


    $result = $conn->query($sql);

    if ($result && $result->num_rows == 0) {
      die("Non esiste una stanza con quell'ID");
    }

    $sql = "DELETE FROM `stanze` WHERE `id` =  '$roomId'";

    $result = $conn->query($sql);

    if($result ) {
      // echo 'OK';
      header("Location: $homePage?roomNumber=$roomId");
    } else {
      echo 'KO';
    }

    $conn->close();
 ?>
