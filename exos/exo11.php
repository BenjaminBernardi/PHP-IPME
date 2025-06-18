<?php

$n = 5;
$result = 1;

if ($n > 0) {
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    echo $result;
} else {
    echo $n . " n'est pas un nombre positif";
}

?>