<?php
$un = intval($_GET["nb1"]);
$deux = intval($_GET["nb2"]);
$resultat = $un + $deux;
?>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Résultat</title>
    </head>
    <body>
        <h1>Résultat</h1>
        <p><?= $un ?> + <?= $deux ?> = <?= $resultat ?></p>
        <p><a href="addition.php">Faire une autre addition</a></p>
    </body>
</html>