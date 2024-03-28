<?php
define("MESSAGE_ACCUEIL", "Bonjour la planète !");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Définir une constante</title>
    </head>
    <body>
        <p><?php echo MESSAGE_ACCUEIL; ?></p>
<hr>
<pre>
<?php var_dump(defined("MESSAGE_ACCUEIL")); ?>
<?php var_dump(defined("MESSAGE_D_ACCUEIL")); ?>
</pre>
    </body>
</html>