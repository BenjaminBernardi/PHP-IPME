<?php

// var_dump($_SERVER);
var_dump($_GET);
// exemple d'url pour un $_GET : http://localhost:8080/?toto=allo

echo $_GET["name"];
// http://localhost:8080/?toto=allo&name=ben : ici, récupère "ben"

if (isset($_GET["name"])) {
    echo $_GET["name"];
}
// Si la valeur "name" existe dans l'url, elle est récupérée (évite une erreur pour le cas contraire)

?>