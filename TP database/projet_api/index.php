<?php
include "pdo.php";

$sql = "SELECT * FROM elements ORDER BY atomic_number";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$elements = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <tr>
        <th>Name</th>
        <th>Symbol</th>
        <th>Atomic number</th>
        <th>Standard State</th>
        <th>Action</th>
    </tr>
    <?php foreach ($elements as $element) : ?>
        <tr>
            <td><?= $element["name"] ?></td>
            <td><?= $element["symbol"] ?></td>
            <td><?= $element["atomic_number"] ?></td>
            <td><?php if ($element["standard_state"] != "") {
                    echo $element["standard_state"];
                } else {
                    echo "undefined";
                } ?></td>
            <td>
                <a href=<?= "item.php?id=" . $element["id"] ?>>
                    <button type="button">Show</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="addelements.php" onclick="return confirm('Êtes-vous sûr de vouloir ajouter des éléments ?')">
    <button type="button">Ajouter des éléments</button>
</a>
