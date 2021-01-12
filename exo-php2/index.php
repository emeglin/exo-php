<!DOCTYPE html>
<html>
    <head>
        <title>Exercices en PHP</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style/main.css">
    </head>
<body>
<?php
    require_once('fonction.php');

   echo "<p>Exo 1</p>";
   $l = 6; 
   $c = 6;
   $board = GenBoard($l,$c);
   DisplayBoard($board);

   echo "<br/><p>Exo 2</p>";
   $num = 6; 
   $random = RandArray($num); 
   DisplayArray($random);

   echo "<br/><p>Exo 3</p>";
   $num_2 = 8; 
   $sort = "ASC"; 
   $arrayS = SortArray($num_2, $sort); 
   DisplayArray($arrayS); 


?>
</body>
</html>