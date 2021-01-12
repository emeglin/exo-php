<!DOCTYPE html>
<html>
    <head>
        <title>Exercices en PHP</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/main.css">
    </head>
<body>
    <?php
    require_once('function.php');
    $str = "Kayak";
    $strrev = Reverse($str);
    echo "La chaîne originale est ".$str;
    echo "<br/>La chaîne inversée est ".$strrev;
    Palindrome($str, $strrev);
    ?>

<?php
    require_once('function.php');
   echo "<p>Exercice 1</p><br/>";
   $l = 11; // nombre de lignes
   $c = 11; // nombre de colonnes
   
   $board = GenBoard($l,$c); //on génère le damier
   DisplayBoard($board); //on affiche le damier
    ?>
</body>
</html>