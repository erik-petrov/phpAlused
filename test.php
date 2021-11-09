<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP Algus</title>
</head>
<body>
<?php

echo "<h1>Param pam pam</h1>";
$text = "gae";
echo $text;
echo "<br><h2>Matemaatika tehed. Mõistatus</h2>";
echo "<h3>Arva ära kaks arvu</h3>";
$num1 = 5;
$num2 = 8;
//adding 2 nums
echo "Kui liidame kokku, vastus on ".($num1+$num2);
echo "<br>Kui esimene arv jagame teise arvuga, siis vastus on ".($num1/$num2);
?>
<footer>
    <?php
    echo "Tänane kuupäev on: ".date("d.m.Y");
    echo "<br>Kell on: ".date("H:i");
    ?>
</footer>
</body>
</html>

