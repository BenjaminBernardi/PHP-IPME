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
} elseif (isset($_GET["search"]) && isset($_GET["block"]) && $_GET["block"] != "display+all") {
    $sql = "SELECT * FROM elements WHERE name LIKE '%" . $_GET["search"] . "%' AND group_block = '" . $_GET["block"] . "' ORDER BY atomic_number";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $elements = $stmt->fetchAll(PDO::FETCH_ASSOC);
} elseif (isset($_GET["search"]) && isset($_GET["block"]) && $_GET["block"] == "display+all") {
    $sql = "SELECT * FROM elements WHERE name LIKE '%" . $_GET["search"] . "%' ORDER BY atomic_number";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $elements = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $sql = "SELECT * FROM elements ORDER BY atomic_number";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $elements = $stmt->fetchAll(PDO::FETCH_ASSOC);
}


// recuperer les éléments de group_block :
$sql = "SELECT group_block, count(*) FROM elements GROUP BY group_block";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$groupBlock = $stmt->fetchAll(PDO::FETCH_ASSOC);

$test = ["display all"];
foreach ($groupBlock as $group) {
    $test[] = $group["group_block"];
}
?>

<form id="recherche">
    <div>
        <label for="search">Search an element: </label>
        <input type="search" name="search">
    </div>
    <div>
        <label for="block">Sort by group block: </label>
        <select name="block">
            <?php foreach ($test as $item) : ?>
                <option value="<?php echo $item ?>"><?php echo $item ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <input type="submit" value="Search an element">
    </div>
    <div>
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
    </div>
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
