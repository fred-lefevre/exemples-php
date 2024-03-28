<?php
session_start();

$_SESSION["compteur"] = 0;

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Initialiser le compteur</title>
    </head>
    <body>
        <h1>Initialiser le compteur</h1>
        <p>Le compteur a pour valeur 0</p>
        <ul>
            <li><a href="index.php">Accueil</a></li>
        </ul>
    </body>
</html>