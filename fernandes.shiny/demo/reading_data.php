<?php

include "../lib/php/functions.php";

$filename = "json_notes.json";
$file = file_get_contents($filename);
$notes_object = json_decode($file);

// print_p($notes_object);

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Notes</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>

   <header class="navbar">
      <div class="container">
         <h1>Notes</h1>
      </div>
   </header>

   <div class="container">
      <div class="card soft">
         <h2>JSON Notes</h2>

         <ul>
         <?php

         // instantiation comparison iteration
         for($i=0; $i<count($notes_object->notes); $i++){
            echo "<li>".
            $notes_object->notes[$i].
            "</li>\n";
         }

         ?>
         </ul>

      </div>
   </div>
   
</body>
</html>