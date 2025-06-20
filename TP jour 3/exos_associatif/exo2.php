<?php if ( (isset($_GET["a"]) && $_GET["a"] != "") && (isset($_GET["b"]) && $_GET["b"] != "")) :
    $sum = $_GET["a"] + $_GET["b"]; ?>
    <p>La somme de <?=$_GET["a"]?> et <?=$_GET["b"]?> vaut <?=$sum?> !</p>
<?php else : ?>
    <p>Valeurs manquantes</p>
<?php endif; ?>