<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../dist/app.css">
    <title></title>
  </head>
  <body>
    <?php include 'server.php'; ?>
    <h1>STANZA NUMERO: <?php echo $room['room_number']; ?></h1>
    <ul>
      <li>POSTI LETTO: <?php echo $room['beds']; ?></li>
      <li>PIANO: <?php echo $room['beds']; ?></li>
    </ul>
  </body>
</html>
