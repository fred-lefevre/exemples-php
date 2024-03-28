<?php
$un = intval($_GET["nb1"] ?? 0);
$deux = intval($_GET["nb2"] ?? 0);
$som = $un + $deux;
echo $un . ' + ' . $deux . ' = ' . $som;
?>