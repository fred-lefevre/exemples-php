<?php

$msg = 'Coucou !';

echo 'Texte              = ' . $msg . PHP_EOL;
echo 'Premier caractère  = ' . $msg[0] . PHP_EOL;
echo 'Deuxième caractère = ' . $msg[1] . PHP_EOL;
echo 'Longueur du texte  = ' . strlen($msg) . PHP_EOL;
echo 'Dernier caractère  = ' . $msg[strlen($msg)-1] . PHP_EOL;

// Avec une notice car on accède au caractère
// $msg[strlen($msg)] qui n'existe pas.

for ($i = 0; $i <= strlen($msg) ; $i++) {
    echo $msg[$i] . PHP_EOL;
}

?>