<?php
  include 'database.php';
  var_dump($rooms);
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
           <th>ID</th>
           <th>PIANO</th>
           <th></th>
         </tr>
       </thead>
       <tbody>
         <?php if (!empty($rooms)) {
            foreach ($rooms as $room) {           ?>
             <tr>
               <td><?php echo $room['id'] ?> </td>
               <td><?php echo $room['floor']  ?></td>
               <td><a href="#">Guarda Dettagli Stanza</a> </td>
             </tr>
           <?php }
         } ?>
       </tbody>
     </table>
   </body>
 </html>
