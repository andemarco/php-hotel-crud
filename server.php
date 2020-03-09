<?php
  include 'database.php';
  include 'functions.php';


  $rooms = getAll($conn, "stanze");

  $conn->close();
?>
