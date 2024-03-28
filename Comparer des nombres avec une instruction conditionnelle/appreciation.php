<?php

$noteSurVingt = 17;

if ($noteSurVingt >= 10) {
    $message = "Bravo !!!";
} else {
    $message = "Tu feras mieux la prochaine fois !";
}

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Appréciation</title>
    </head>
    <body>
        <p>Note = <?php echo $noteSurVingt; ?> / 20</p>
        <p><?php echo $message; ?></p>
    </body>
</html>