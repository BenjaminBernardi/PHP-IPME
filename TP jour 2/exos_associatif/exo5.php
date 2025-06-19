<?php

$couleurs = [
    "rouge" => "#FF0000",
    "bleu" => "#0000FF",
    "vert" => "#008000"
];
$rvsCouleurs = [];
//$rvsCouleurs = array_flip($couleurs);

foreach ($couleurs as $key => $value) {
    $rvsCouleurs[$value] = $key;
}

var_dump($rvsCouleurs);

?>