<?php
include "pdo.php";

if (isset($_GET["standard_state"]) && $_GET["standard_state"] == "gas") {
    $sql = "SELECT * FROM elements WHERE standard_state = 'gas' ORDER BY atomic_number";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $elements = $stmt->fetchAll(PDO::FETCH_ASSOC);
} elseif (isset($_GET["standard_state"]) && $_GET["standard_state"] == "solid") {
    $sql = "SELECT * FROM elements WHERE standard_state = 'solid' ORDER BY atomic_number";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $elements = $stmt->fetchAll(PDO::FETCH_ASSOC);
} elseif (isset($_GET["standard_state"]) && $_GET["standard_state"] == "liquid") {
    $sql = "SELECT * FROM elements WHERE standard_state = 'liquid' ORDER BY atomic_number";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $elements = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $sql = "SELECT * FROM elements ORDER BY atomic_number";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $elements = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// SELECT group_block, count(*) FROM elements GROUP BY group_block;
//recuperer les éléments unique des standard :
$test = [
        'halogen', 'transition metal'
]
?>
<form id="recherche">
    <select name="block">
        <?php foreach ($test as $item) : ?>
            <option value="<?php echo $item ?>"><?php echo $item ?></option>
        <?php endforeach; ?>
    </select>
    <a href="index.php?standard_state=gas">
        <button type="button">Show gas elements</button>
    </a>
    <a href="index.php?standard_state=solid">
        <button type="button">Show solid elements</button>
    </a>
    <a href="index.php?standard_state=liquid">
        <button type="button">Show liquid elements</button>
    </a>
    <a href="index.php">
        <button type="button">Show all elements</button>
    </a>
</form>

<table>
    <tr>
        <th>Name</th>
        <th>Symbol</th>
        <th>Atomic number</th>
        <th>Standard State</th>
        <th>Year discovered</th>
        <th>Group block</th>
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
            <td><?php if ($element["year_discovered"] != "") {
                    echo $element["year_discovered"];
                } else {
                    echo "undefined";
                } ?></td>
            <td><?= $element["group_block"] ?></td>
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
