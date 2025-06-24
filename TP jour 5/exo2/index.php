<?php
session_start();
var_dump($_SESSION);

if (isset($_SESSION["user"])) {
    echo "Vous êtes connecté en tant que " . $_SESSION["user"] . ".";
} else {
    echo "Vous n'êtes pas connecté.";
}
?>

<button><a href="disconnect.php">Se déconnecter</a></button>
