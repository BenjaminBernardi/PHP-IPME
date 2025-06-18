<?php

$counter = 0;
$vowels = ["a", "e", "i", "o", "u", "y"];

$phrase = 'Bonjour tout le monde';
$phrase = strtolower($phrase);

$array = str_split($phrase);

foreach ($array as $item) {
    if (in_array($item, $vowels)) {
        $counter++;
    }
}

echo "Il y a " . $counter . " voyelle(s) dans la phrase '" . $phrase . "'";

?>