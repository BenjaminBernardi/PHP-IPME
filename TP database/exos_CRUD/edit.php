<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=mygames;charset=utf8',
    'root',
    ''
);

if (isset($_GET["id"]) && $_GET["id"] != "") {
    $sql = "SELECT * FROM game WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET["id"]]);
    $game = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<form method="get">
    <textarea type="text" name="title"><?= $game["title"] ?></textarea>
    <textarea type="text" name="genre"><?= $game["genre"] ?></textarea>
    <textarea type="text" name="platform"><?= $game["platform"] ?></textarea>
    <textarea type="text" name="rating"><?= $game["rating"] ?></textarea>
</form>

<a href="index.php"><button type="button">Retour à la liste des jeux</button></a>
