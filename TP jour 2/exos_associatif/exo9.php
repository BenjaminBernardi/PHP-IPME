<?php

$produits = [
    ['nom' => 'Chaise', 'stock' => 5],
    ['nom' => 'Table', 'stock' => 0],
    ['nom' => 'Lampe', 'stock' => 3]
];

?>

<ul>
    <?php foreach ($produits as $items) :
    if ($items["stock"] > 0) : ?>
    <li><?=$items["nom"]?> : <?=$items["stock"]?></li>
    <?php else : ?>
    <li><?=$items["nom"]?> : Rupture de stock</li>
    <?php endif; endforeach; ?>
</ul>
