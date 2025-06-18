<?php

$valeurs = [8, 3, 5, 1, 9];
$minValue = 1000000000;

foreach ($valeurs as $items) {
    if ($minValue > $items) {
        $minValue = $items;
    }
}

echo $minValue;

?>