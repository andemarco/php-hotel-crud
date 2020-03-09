
<?php
  include 'server.php';
  include __DIR__ . '/../partials/header.php';
?>
    <h1>STANZA NUMERO: <?php echo $room['room_number']; ?></h1>
    <ul>
      <li>POSTI LETTO: <?php echo $room['beds']; ?></li>
      <li>PIANO: <?php echo $room['floor']; ?></li>
    </ul>
    <a href="<?php echo $homePage ?>">Torna alle stanze</a>
  </body>
</html>
