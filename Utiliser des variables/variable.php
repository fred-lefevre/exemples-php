<?php

echo "NOMBRE ENTIER", PHP_EOL;

// Initialisation de la variable $info avec la valeur 58
// 58 est un nombre entier
$info = 58;
echo $info, PHP_EOL;

// Affectation d'une autre valeur à la variable $info
$info = 120;
echo $info , PHP_EOL;

// Initilisation de la variable $delta
$delta = 10;

// Affectation du résultat du calcul $info + $delta
// à la variable $info
$info = $info + $delta;
echo $info , PHP_EOL;

$info += $delta; // Revient à faire $info = $info + $delta;
echo $info , PHP_EOL;

$coef = 2;

// La valeur contenue dans $info est multipliée par $coef
$info *= $coef;
echo $info , PHP_EOL;

// Affichage du type de la variable $info
echo "Type = ", gettype($info) , PHP_EOL;

// Affichage des informations à propos de la variable $info
// son type et sa valeur
var_dump($info);

echo "NOMBRE A VIRGULE", PHP_EOL;
$info = 10.67;
echo $info , PHP_EOL;

// Les nombres à virgule sont de type float
// Le type double est en fait la même chose que le type float en PHP
echo "Type = ", gettype($info) , PHP_EOL;
var_dump($info);

echo "TEXTE", PHP_EOL;
$info = "plouf plouf !!!";
echo $info , PHP_EOL;
echo "Type = ", gettype($info) , PHP_EOL;
var_dump($info);

echo "BOOLEEN", PHP_EOL;

// La valeur logique VRAI est représentée par la valeur booléen true 
$info = true;
var_dump($info);

// La valeur logique FAUX est représentée par la valeur booléen false
$info = false;
var_dump($info);

?>