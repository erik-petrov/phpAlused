<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 405</title>
</head>
<body>
<a href="../../test.php">--------------Tagasi--------------</a>
<h1>Ülesanne 405 - Korrutustabel 2 tsükliga</h1>
<?php
echo "<table>";
for ($i = 1; $i<11; $i++){
    echo "<tr>";
    for ($j = 1; $j<11; $j++){
        echo "<td style='border: black 1px solid;margin: 1%;text-align: center;'>".$i*$j."</td>";
    }
    echo "</tr>";
}
echo "</table>"
?>
</body>
</html>
