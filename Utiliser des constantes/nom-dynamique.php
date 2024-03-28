<?php
define("QUESTION_FR", "Quel est votre choix ?");
define("QUESTION_EN", "What is your choice?");

$langue = 'FR';
//$langue = 'EN';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nom dynamique de constante</title>
    </head>
    <body>
        <p><?php echo constant('QUESTION_' . $langue); ?></p>
    </body>
</html>