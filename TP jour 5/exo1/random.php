<?php
session_start();

if (isset($_SESSION["random"])) {
    $_SESSION["random"] = $_SESSION["random"] + 1;
} else {
    $_SESSION["random"] = 0;
}

echo $_SESSION["random"];
var_dump($_SESSION);
?>