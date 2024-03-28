<?php
session_start();

if (isset($_SESSION["compteur"])) {
    $message = "Le compteur a pour valeur : " . $_SESSION["compteur"];
} else {
    $message = "Le compteur n'a pas de valeur";
}

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Accueil</title>
    </head>
    <body>
        <h1>Accueil</h1>
        <p><?php echo $message; ?></p>
        <ul>
            <li><a href="initialiser-compteur.php">Initialiser le compteur à 0</a></li>
            <li><a href="ajouter.php">Ajouter</a></li>
            <li><a href="soustraire.php">Soustraire</a></li>
            <li><a href="supprimer-compteur.php">Supprimer le compteur</a></li>
        </ul>
        <hr />
        <pre>
$_SESSION =
<?php var_dump($_SESSION); ?>
        </pre>
    </body>
</html>