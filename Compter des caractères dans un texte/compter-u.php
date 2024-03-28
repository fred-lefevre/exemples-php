<?php

//$msg = 'Coucou !';
$msg = "Salut SalUUUt Salut Salut Salut ";
//$msg = "u";
//$msg = "U";
//$msg = "";

$cpt = 0;
echo $msg . PHP_EOL;

for ($i = 0; $i < strlen($msg) ; $i++) {
    //echo $msg[$i] . PHP_EOL;
    if ( $msg[$i] == 'u' || $msg[$i] == 'U' )
        $cpt++;
}

echo $cpt . PHP_EOL;

?>