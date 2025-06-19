<?php

$personne = [
    'Nom' => 'Dupont',
    'Prénom' => 'Alice',
    'Âge' => 25,
    'Ville' => 'Paris'
];

?>

<table>
    <?php foreach ($personne as $key => $value) : ?>
    <tr>
        <td><?=$key?></td>
        <td><?=$value?></td>
    </tr>
    <?php endforeach; ?>
</table>
