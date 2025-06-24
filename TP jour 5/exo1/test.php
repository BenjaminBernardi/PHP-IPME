<?php
session_start();

if (isset($_SESSION["test"])) {
    $_SESSION["test"] = $_SESSION["test"] + 1;
} else {
    $_SESSION["test"] = 1;
}

var_dump($_SESSION);
?>

<a href="accueil.php">Page accueil</a>
<a href="contact.php">Page contact</a>
<a href="random.php">Page random</a>
