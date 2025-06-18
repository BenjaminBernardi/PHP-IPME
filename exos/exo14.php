<?php

$nombres = [10, 42, 5, 8, 42, 19];
$recherche = 42;
$key = [];

if (in_array($recherche, $nombres)) {
    /*for ($i = 0; $i < count($nombres); $i++) {
        if ($recherche == $nombres[$i]) {
            $key[] = $i;
        }
    }*/
    $key = array_keys($nombres, $recherche);
    print_r($key);
} else {
    echo "Le nombre " . $recherche . " n'est pas présent dans le tableau";
}

?>