<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Dates & Heures</title>
    </head>
    <body>
<?php
date_default_timezone_set('Europe/Paris');
?>

		<h3>Quel jour sommes nous ?</h3>
<?php
$d = new DateTime();
echo '<p>' . $d->format('d/m/Y') . '</p>';
?>

		<h3>Quelle heure est-il ?</h3>
<?php
echo '<p>' . $d->format('H:i:s') . '</p>';
echo '<p>' . $d->format('d/m/Y H:i:s') . '</p>';
?>

		<h3>Quelle heure sera-t-il dans une heure ?</h3>
<?php
$decalageHeu = new DateInterval('PT1H');
$d->add($decalageHeu);
echo '<p>' . $d->format('H:i:s') . '</p>';
?>

		<h3>Quelle heure sera-t-il dans un jour ?</h3>
<?php
$d->sub($decalageHeu);
$decalageJou = new DateInterval('P1D');
$d->add($decalageJou);
echo '<p>' . $d->format('H:i:s') . ' le ' . $d->format('d/m/Y') . '</p>';
?>

		<h3>Choisir la date explicitement</h3>
<?php
$d = new DateTime("2022/12/31 23:17:05");
echo '<p>' . $d->format('d/m/Y H:i:s') . '</p>';
$decalageJouHeu = new DateInterval('P1DT1H');
$d->add($decalageJouHeu);
echo '<p>Un jour et une heure plus tard = ' . $d->format('d/m/Y H:i:s') . '</p>';
?>

		<h3>Noël 2022, c'est dans combien de jours ?</h3>
<?php
$maintenant = new DateTime();
$noel = DateTime::createFromFormat('j-M-Y', '25-Dec-2022');
echo '<p>Noël = ' . $noel->format('d/m/Y') . '</p>';
$decalage = $maintenant->diff($noel);
echo '<p>' . $decalage->format('%m mois %d jours') . '</p>';
?>

		<h3>A Tokyo, quelle heure est-il ?</h3>
<?php
$tzTo = new DateTimeZone('Asia/Tokyo');
$d = new DateTime('now', $tzTo);
echo '<p>' . $d->format('H:i:s') . '</p>';
?>
    </body>
</html>