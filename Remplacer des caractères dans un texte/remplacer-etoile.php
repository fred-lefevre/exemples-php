<?php

$msg = 'Coucou !';
//$msg = 'Salut ! Coucou !';

echo $msg . PHP_EOL;

for ($i = 0; $i < strlen($msg); $i++) {
    if ($msg[$i] == 'u')
        $msg[$i] = '*';
}

echo $msg . PHP_EOL;

?>