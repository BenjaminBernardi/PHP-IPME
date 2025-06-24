<?php
session_start();

if (isset($_SESSION["contact"])) {
    $_SESSION["contact"] = $_SESSION["contact"] + 1;
} else {
    $_SESSION["contact"] = 0;
}

echo $_SESSION["contact"];
var_dump($_SESSION);
?>