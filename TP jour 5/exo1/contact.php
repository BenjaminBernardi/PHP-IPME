<?php
session_start();

if (isset($_SESSION["contact"])) {
    $_SESSION["contact"] = $_SESSION["contact"] + 1;
} else {
    $_SESSION["contact"] = 1;
}

var_dump($_SESSION);
?>

<a href="accueil.php">Page accueil</a>
<a href="test.php">Page test</a>
<a href="random.php">Page random</a>
