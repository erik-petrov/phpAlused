<a href="../test.php">--------------Tagasi--------------</a>
<?php
$varvid=array("Indigo", "ForestGreen", "DarkCyan", "Crimson", "Aquamarine",
    "LemonChiffon", "MediumSpringGreen", "SteelBlue", "RebeccaPurple",
    "PaleGoldenRod", "LightSeaGreen", "HoneyDew", "DeepSkyBlue", "DarkOliveGreen", "DarkGreen");
foreach ($varvid as &$i) {
    echo "<span style='color: $i'> Värvi nimi: $i<br>";
}
?>
