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
<h1>Veebiprogrameerimine PHP </h1>

<a href="http://students.tmk.edu.ee/php/materjal/php_syntax.php#PHP%20s%C3%BCntaks/" target="_blank">PHP süntaks näidistega</a>

<h1> PHP harjutused</h1>
<p>================================</p><br>
<h2><b>Ülesanne 401</b></h2><br>

<p>Tee massiiv kuhu lisada järgmised andmed:<br>
    Nimi, aadress, pildi nimi (nt. vello.jpg), kodulehekülg (nt. www.onu.ee)<br>
    Pilt salvesta ülesande kataloogi.<br>
    Luua HTML lehekülg kuhu kuvada massiivist välja eelpool kirjeldatud andmed.<br>
    Nime kuvamiseks kasuta 	&#60; b	&#62; tagi.<br>
    Aadressi kuvamiseks kasuta &#60; i &#62; tagi.<br>
    Pildi kuvamiseks kasuta &#60; img src= &#62; tagi.<br>
    Kodulehe lingi kuvamiseks kasuta &#60; a href= &#62; tagi.</p>
<a href="harjutused/401"> Ülesanne 401</a>



<p>================================</p><br>
<h2><b>Ülesanne 402</b></h2><br>

<p>Tee tsükliga 20 "checkboxi". Pane neile kõigile oma nimi stiilis box[1], box[2], jne.<br>
    Tee tsükliga 20 "teksti lahtrit". Pane neile kõigile oma nimi stiilis cell[1], cell[2], jne.<br>
    Tee tsükliga 20 "radio buttonit". Pane neile kõigile üks nimi "radio" ja erinevad väärtused stiilis value1, value2 jne.</p>
<a href="harjutused/402/"> Ülesanne 402</a>



<p>================================</p><br>
<h2><b>Ülesanne 403</b></h2><br>

<p>Lisa massiivi 15 HTML erinevat värvi.<br>
    Leia ilusad värvi nimed siit: http://www.w3schools.com/colors/colors_names.asp<br>
    Kuva tsükliga välja värvuste nimed ja värvi need sama värvi nt. <br>
    &#60; span style='color: cyan' &#62; cyan - sinine taevas &#60; /span &#62;</p>
<a href="harjutused/402/"> Ülesanne 402</a>



<p>================================</p><br>
<h2><b>Ülesanne 405</b></h2><br>

<p>Genereeri kahe FOR tsükkliga 10x10 korrutustabel.<br>
    Korrutustabel peab olema HTML tabeli sees.<br>
    Korrutustabelis peab olema esimesel real ja veerul numbrid 1-10. <br>
    Teisel real esimese rea ja veeru korrustis jne.</p>
<a href="harjutused/402/"> Ülesanne 402</a>
<footer>
    <?php
    echo "Tänane kuupäev on: ".date("d.m.Y");
    echo "<br>Kell on: ".date("H:i");
    ?>
</footer>
</body>
</html>

