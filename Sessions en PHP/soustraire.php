<?php
session_start();

$_SESSION["compteur"]--;

// $_SESSION["compteur"] = $_SESSION["compteur"] - 1;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Soustraire</title>
    </head>
    <body>
        <h1>Soustraire</h1>
        <p>Compteur = <?php echo $_SESSION["compteur"]; ?></p>
        <ul>
            <li><a href="ajouter.php">Ajouter</a></li>
            <li><a href="soustraire.php">Soustraire encore</a></li>
            <li><a href="index.php">Accueil</a></li>
        </ul>
    </body>
</html>