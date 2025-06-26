<?php
include "header.php";
include "pdo.php";

if (isset($_GET["id"]) && $_GET["id"] != "") {
    $sql = "SELECT * FROM elements WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET["id"]]);
    $element = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($element != false) : ?>
    <h1 class="h1"><?= $element["name"] ?></h1>
    <h4 class="h4">Symbol: <?= $element["symbol"] ?></h4>
    <p class="lead">Atomic number: <?= $element["atomic_number"] ?></p>
    <p class="lead">Standard state: <?php if ($element["standard_state"] != "") {
            echo $element["standard_state"];
        } else {
            echo "undefined";
        } ?></p>
    <p class="lead">Year discovered: <?php if ($element["year_discovered"] != "") {
            echo $element["year_discovered"];
        } else {
            echo "undefined";
        } ?></p>
    <p class="lead">Group block: <?php if ($element["group_block"] != "") {
            echo $element["group_block"];
        } else {
            echo "undefined";
        } ?></p>
    <p class="lead">Atomic mass: <?php if ($element["atomic_mass"] != "") {
            echo $element["atomic_mass"];
        } else {
            echo "undefined";
        } ?></p>
    <p class="lead">Bonding type: <?php if ($element["bonding_type"] != "") {
            echo $element["bonding_type"];
        } else {
            echo "undefined";
        } ?></p>
    <p class="lead">Density: <?php if ($element["density"] != "") {
            echo $element["density"];
        } else {
            echo "undefined";
        } ?></p>

<?php else : ?>
    <h1 class="h1">⚠️ Erreur : Cet élément n'existe pas dans la base.</h1>

<?php endif; ?>

<a href="index.php">
    <button type="button" class="btn btn-primary">Return to list of items</button>
</a>

<?php include "footer.php"; ?>
