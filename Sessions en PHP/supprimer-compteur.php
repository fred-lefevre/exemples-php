<?php
session_start();

unset($_SESSION["compteur"]);

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Supprimer le compteur</title>
    </head>
    <body>
        <h1>Supprimer le compteur</h1>
        <p>Le compteur est supprimé</p>
        <ul>
            <li><a href="index.php">Accueil</a></li>
        </ul>
    </body>
</html>