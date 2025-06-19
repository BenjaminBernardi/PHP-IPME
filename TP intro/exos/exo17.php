<?php

$mot = 'ordinateur';
$mot = strtolower($mot);
$lettre = 'r';
$key = [];

for ($i = 0; $i < strlen($mot); $i++) {
    if ($lettre == $mot[$i]) {
        $key[] = $i;
    }
}

if ($key != []) {
    print_r($key);
} else {
    echo "La lettre n'est pas présente dans le mot";
}

?>