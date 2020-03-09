<?php
  include_once 'server.php';
  include __DIR__ . '/../partials/header.php';


?>
    <h1>STANZA NUMERO: <?php echo $room['room_number']; ?></h1>
    <form action="server.php" method="POST">
      <div class="form-group">
        <label for="room_number">Numero Stanza</label>
        <input class="form-control" type="text" name="room_number" value="<?php echo  $room['room_number'] ?>">
      </div>
      <div class="form-group">
        <label for="floor">Piano</label>
        <input class="form-control" type="text" name="floor" value="<?php echo  $room['floor'] ?>">
      </div>
      <div class="form-group">
        <label for="beds">Numero letti</label>
        <input class="form-control" type="text" name="beds" value="<?php echo  $room['beds'] ?>">
      </div>
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo  $room['id'] ?>">
        <input class="form-control" class="btn btn-submit" type="submit" value="Salva">
      </div>
    </form>
    <a href="<?php echo $homePage ?>">Torna alle stanze</a>
  </body>
</html>
