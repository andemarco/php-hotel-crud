<?php
  include __DIR__ . '/../partials/header.php';
?>
    <h1>Aggiungiamo una nuova stanza</h1>
    <form action="server.php" method="POST">
      <div class="form-group">
        <label for="room_number">Numero Stanza</label>
        <input class="form-control" type="text" name="room_number" placeholder="Inserisci qui il numero della nuova stanza">
      </div>
      <div class="form-group">
        <label for="floor">Piano</label>
        <input class="form-control" type="text" name="floor" placeholder="Inserisci qui il piano della nuova stanza">
      </div>
      <div class="form-group">
        <label for="beds">Numero letti</label>
        <input class="form-control" type="text" name="beds" placeholder="Inserisci qui il numero dei posti letto della nuova stanza">
      </div>
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo  $room['id'] ?>">
        <input class="form-control" class="btn btn-submit" type="submit" value="Salva">
      </div>
    </form>
    <a href="<?php echo $homePage ?>">Torna alle stanze</a>
  </body>
</html>
