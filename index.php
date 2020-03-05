<?php
  include 'server.php';
  include 'partials/header.php';
 ?>
 <?php if(!empty($_GET['roomNumber'])) { ?>
   <div class="alert alert-danger">
     <p>Hai cancellato la stanza id : <?php echo $_GET['roomNumber'] ?></p>
     <a href="<?php echo $homePage ?>"class="btn btn-info">OK</a>
   </div>
<?php die(); } ?>


     <table class="table">
       <thead>
         <tr>
           <th>STANZA NUMERO</th>
           <th></th>
         </tr>
       </thead>
       <tbody>
         <?php if (!empty($rooms)) {
            foreach ($rooms as $room) {           ?>
             <tr>
               <td><?php echo $room['room_number']?> </td>
               <td><a href="show/show.php?id=<?php echo $room['id'] ?>">Guarda Dettagli Stanza <?php echo $room['room_number']?> </a> </td>
              <td>
               <form action="delete/server.php" method="POST">
                 <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
                 <input class="btn btn-danger" type="submit" value="DELETE">
               </form>
              </td>
             </tr>
           <?php }
         } ?>
       </tbody>
     </table>
   </body>
 </html>
