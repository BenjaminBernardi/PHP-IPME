<?php
session_start();

if (isset($_SESSION["accueil"])) {
    $_SESSION["accueil"] = $_SESSION["accueil"] + 1;
} else {
    $_SESSION["accueil"] = 0;
}

echo $_SESSION["accueil"];
var_dump($_SESSION);
?>

<p>La page accueil a été visitée <?php if (isset($_SESSION["accueil"])) { echo $_SESSION["accueil"]; } else { echo 0; } ?> fois</p>
<p>La page contact a été visitée <?php if (isset($_SESSION["contact"])) { echo $_SESSION["contact"]; } else { echo 0; } ?> fois</p>
<p>La page test a été visitée <?php if (isset($_SESSION["test"])) { echo $_SESSION["test"]; } else { echo 0; } ?> fois</p>
<p>La page random a été visitée <?php if (isset($_SESSION["random"])) { echo $_SESSION["random"]; } else { echo 0; } ?> fois</p>

<button type="button">Réinitialiser</button>
