<?php

$a = 14;
$b = 22;
$c = 6;

if ($a > $b && $a > $c) {
    echo $a . " est le nombre le plus grand";
} elseif ($b > $a && $b > $c) {
    echo $b . " est le nombre le plus grand";
} elseif ($c > $a && $c > $b) {
    echo $c . " est le nombre le plus grand";
} else {
    echo "erreur";
}

?>