<?php
include "pdo.php";

if (isset($_GET["id"]) && $_GET["id"] != "") {
    $sql = "SELECT * FROM elements WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET["id"]]);
    $element = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($element != false) : ?>
    <h2><?= $element["name"] ?></h2>
    <h3>Symbol: <?= $element["symbol"] ?></h3>
    <p>Atomic number: <?= $element["atomic_number"] ?></p>
    <p>Standard state: <?php if ($element["standard_state"] != "") {
            echo $element["standard_state"];
        } else {
            echo "undefined";
        } ?></p>
    <p>Year discovered: <?php if ($element["year_discovered"] != "") {
            echo $element["year_discovered"];
        } else {
            echo "undefined";
        } ?></p>
    <p>Group block: <?php if ($element["group_block"] != "") {
            echo $element["group_block"];
        } else {
            echo "undefined";
        } ?></p>
    <p>Atomic mass: <?php if ($element["atomic_mass"] != "") {
            echo $element["atomic_mass"];
        } else {
            echo "undefined";
        } ?></p>
    <p>Bonding type: <?php if ($element["bonding_type"] != "") {
            echo $element["bonding_type"];
        } else {
            echo "undefined";
        } ?></p>
    <p>Density: <?php if ($element["density"] != "") {
            echo $element["density"];
        } else {
            echo "undefined";
        } ?></p>

<?php else : ?>
    <h1>⚠️ Erreur : Cet élément n'existe pas dans la base.</h1>

<?php endif; ?>

<a href="index.php">
    <button type="button">Retour à la liste des éléments</button>
</a>
