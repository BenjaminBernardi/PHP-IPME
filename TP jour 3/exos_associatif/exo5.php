<?php if ( (isset($_GET["item"])) && $_GET["item"] != "") : ?>
    <ul>
        <?php foreach ($_GET["item"] as $key => $value) : ?>
            <li><?=$value?></li>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>Valeurs manquantes</p>
<?php endif; ?>
