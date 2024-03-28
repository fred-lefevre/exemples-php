<?php
$un = $_POST["nb1"];
$deux = $_POST["nb2"];
$resultat = intval($un) + intval($deux);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
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