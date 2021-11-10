<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "<h1>Matemaatika tehed. Mõistatus</h1>";
echo "<h3>Arva ära kaks arvu</h3>";
$num1 = 5;
$num2 = 8;
//adding 2 nums
echo "Kui liidame kokku, vastus on ".($num1+$num2);
echo "<br>Kui teisest arvust lahutada esimene, siis vastus on -".abs($num1-$num2);
echo "<br>Kahe arvude korrutis ".$num1*$num2;
echo "<br>Kui esimene arv jagame teise arvuga, siis vastus on ".($num1/$num2);
echo "<br>Esimene arv ruudus ".pow($num1, 2);
echo "<br>Teine arv ruudus ".pow($num2, 2);
echo "<br> <a href='vastus.php'>Õige vastus</a>";
echo "<br><h2>Arva ära Eesti Linnanimi</h2>";
$linn = "Tallinn";
echo "See linnanimi pikkus on ".strlen($linn);
echo "<br>See linnanimi esimene täht on ".substr($linn,0,1);
echo "<br>See segatud linnanimi on ".str_shuffle(strtolower($linn));
echo "<br>See linnanimi krüpteeritud on ".str_rot13($linn);
echo "<br> <a href='vastusLinn.php'>Õige vastus</a>";
?>
</body>
</html>
