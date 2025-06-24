<?php
session_start();

if (isset($_SESSION["random"])) {
    $_SESSION["random"] = $_SESSION["random"] + 1;
} else {
    $_SESSION["random"] = 1;
}

var_dump($_SESSION);
?>

<a href="accueil.php">Page accueil</a>
<a href="contact.php">Page contact</a>
<a href="test.php">Page test</a>