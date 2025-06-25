<?php
include "pdo.php";

if (isset($_GET["id"]) && $_GET["id"] != "") {
    $sql = "SELECT * FROM game WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET["id"]]);
    $game = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<h2><?= $game["title"] ?></h2>
<h3>Genre: <?= $game["genre"] ?></h3>
<p>Platform: <?= $game["platform"] ?></p>
<p>Rating: <?= $game["rating"] ?> / 20</p>

<a href="index.php"><button type="button">Retour à la liste des jeux</button></a>
