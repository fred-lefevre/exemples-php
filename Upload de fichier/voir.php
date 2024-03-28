<?php
require_once('configuration.php');

if ( file_exists(PHOTO_JPG) ) {
    $msg_photo = '<p>Photo présente</p>';
    $msg_photo .= '<img alt="Photo" src="' . PHOTO_JPG . '" style="width:90%" />';
    $msg_photo .= '<hr /><p><a href="suprimer.php">Supprimer photo</a></p>';
} else  {
    $msg_photo = '<p>Photo absente</p>';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Voir</title>
    </head>
    <body>
        <h1>Voir la photo</h1>
        <?php echo $msg_photo; ?>
        <hr />
        <p><a href="index.php">Accueil</a></p>
    </body>
</html>