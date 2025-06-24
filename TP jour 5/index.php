<?php
session_start();

// mettre une valeur en session
// dans la clé "test" -> une string
$_SESSION["test"] = "ma valeur de test";

// permet de completement supprimer le cookie.
//session_destroy();

// mettre à 0 la valeur
//$_SESSION = [];
?>