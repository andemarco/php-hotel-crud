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
     <h1 class="text-center">HOTEL MICAMALE</h1>
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
             </tr>
           <?php }
         } ?>
       </tbody>
     </table>
   </body>
 </html>
