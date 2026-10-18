<?php
$base = $_POST["base"];
$altezza = $_POST["altezza"];
echo "Base inserita: " . $base . "<br>";
echo "Altezza inserita: " . $altezza . "<br><br>";
$area = $base * $altezza;
$perimetro = ($base + $altezza) * 2;
$diagonale = sqrt(pow($base, 2) + pow($altezza, 2));
echo "<b>Area:</b> " . $area . "<br>";
echo "<b>Perimetro:</b> " . $perimetro . "<br>";
echo "<b>Diagonale:</b> " . $diagonale . "<br>";
?>