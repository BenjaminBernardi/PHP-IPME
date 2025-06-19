<?php

$limite = 50;
$multipleDe = 7;
$total = 0;

for ($i = 1; $i <= $limite; $i++) {
    if ($i % $multipleDe == 0) {
        $total++;
    }
}
echo "Il y a " . $total . " multiples de " . $multipleDe . " entre 1 et " . $limite;

?>