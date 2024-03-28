<?php
if ( isset($_GET["nb1"]) ) {
    // Afficher un résultat
    $afficher_formulaire = false;
    $un = intval($_GET["nb1"]);
    $deux = intval($_GET["nb2"]);
    $resultat = $un + $deux;
    $titre = "Résultat";
} else {
    // Afficher un formulaire
    $afficher_formulaire = true;
    $titre = "Addition";
}

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $titre ?></title>
    </head>
    <body>
        <h1><?= $titre ?></h1>
        <?php if ($afficher_formulaire) { ?>
            <form action="" method="get">
                <input type="text" name="nb1">
                +
                <input type="text" name="nb2">
                <input type="submit" value="Additionner">
            </form>
        <?php } else { ?>
            <p><?= $un ?> + <?= $deux ?> = <?= $resultat ?></p>
            <p><a href="addition.php">Faire une autre addition</a></p>
        <?php } ?>
    </body>
</html>