<?php if ( (isset($_GET["couleur"])) && $_GET["couleur"] != "") : ?>
    <p color=<?=$_GET["couleur"]?>>Ceci est un texte coloré</p>
<?php else : ?>
    <p>Ceci est un texte coloré</p>
<?php endif; ?>