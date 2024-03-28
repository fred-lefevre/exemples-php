<?php
require_once('configuration.php');

if ( file_exists(PHOTO_JPG) ) {
    unlink(PHOTO_JPG);
    $msg_supp = '<p>Photo supprimée</p>';
} else  {
    $msg_supp = '<p>Pas de photo à supprimer</p>';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Supprimer</title>
    </head>
    <body>
        <h1>Suppresion de la photo</h1>
        <?php echo $msg_supp; ?>
        <hr />
        <p>
            <a href="index.php">Accueil</a>
        </p>
    </body>
</html>