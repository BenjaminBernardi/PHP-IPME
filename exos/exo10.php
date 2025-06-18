<?php

$mot = "radar";
$mot = strtolower($mot);
$reverse = strrev($mot);

if ($mot == $reverse) {
    echo $mot . " est un palindrome";
} else {
    echo $mot . " n'est pas un palindrome";
}

?>