<?php
require_once('configuration.php');

$msg_copier = '';

if (isset($_FILES["ficphoto"])
        && $_FILES["ficphoto"]["error"] == UPLOAD_ERR_OK) {
    $msg_tele = '<p>Téléversement réussi</p>';
    
    if (move_uploaded_file($_FILES["ficphoto"]['tmp_name'], PHOTO_JPG)) {
        $msg_copier = '<p>Copie réussie</p>';
        $msg_copier .= '<img alt="Photo" src="' . PHOTO_JPG . '" style="width:90%" />';
    } else {
        $msg_copier = '<p>Echec de la copie du fichier téléversé</p>';
    }
} else {
    $msg_tele = '<p>C\'est la cata !!!</p>';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Résultat</title>
    </head>
    <body>
        <h1>Résultat</h1>
        <?php echo $msg_tele; ?>
        <?php echo $msg_copier; ?>
        <p><a href="index.php">Accueil</a></p>
        <hr />
        <p>Contenu de $_FILES</p>
        <pre><?php var_dump($_FILES); ?></pre>
    </body>
</html>