<?php
$un = $_GET["nb1"];
$deux = $_GET["nb2"];
$resultat = intval($un) + intval($deux);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Résultat</title>
    </head>
    <body>
        <h1>Résultat</h1>
        <p>
            <?php echo $un; ?>
            +
            <?php echo $deux; ?>
            =
            <?php echo $resultat; ?>
        </p>
        <p>
            <a href="index.php" alt="Accueil">Autre calcul</a>
        </p>
    </body>
</html>