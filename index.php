<?php
  include 'database.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="dist/app.css">
     <title></title>
   </head>
   <body>
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
               <td><a href="show/show.php?id=<?php echo $room['id'] ?>">Guarda Dettagli Stanza</a> </td>
             </tr>
           <?php }
         } ?>
       </tbody>
     </table>
   </body>
 </html>
