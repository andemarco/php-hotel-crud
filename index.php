<?php
  include 'server.php';
  include 'partials/header.php';
 ?>


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
               <td><a href="show/show.php?id=<?php echo $room['id']?>" class="text-danger">Distruggi Stanza Numero <?php echo $room['room_number']?> </a> </td>
             </tr>
           <?php }
         } ?>
       </tbody>
     </table>
   </body>
 </html>
