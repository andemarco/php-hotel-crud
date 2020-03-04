<?php
  include 'database.php';
  $sql = "SELECT * FROM stanze WHERE id = 1";

  $result = $conn->query($sql);

  if($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
  }
  elseif ($result) {
    echo 'No results';
  }
  else {
    echo 'Query error';
  }

  $conn->close();
?>
