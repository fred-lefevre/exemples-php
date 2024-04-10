<?php

function somme($a, $b) {
	$s = $a + $b;
	return $s;
}

$resultat_un = somme(15, 5);

$resultat_deux = somme(14, 17);

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Calculer</title>
    </head>
    <body>
        <p>Premier calcul = <?php echo $resultat_un; ?></p>
        <p>Deuxième calcul = <?php echo $resultat_deux; ?></p>
    </body>
</html>