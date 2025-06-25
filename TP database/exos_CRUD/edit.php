<?php
include "pdo.php";

if (isset($_GET["id"]) && $_GET["id"] != "") {
    $sql = "SELECT * FROM game WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET["id"]]);
    $game = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<form method="get">
    <div>
        <label>Title: </label>
        <textarea type="text" name="title" required><?= $game["title"] ?></textarea>
    </div>
    <div>
        <label>Genre: </label>
        <textarea type="text" name="genre" required><?= $game["genre"] ?></textarea>
    </div>
    <div>
        <label>Platform: </label>
        <textarea type="text" name="platform" required><?= $game["platform"] ?></textarea>
    </div>
    <div>
        <label>Rating: </label>
        <textarea type="text" name="rating" required><?= $game["rating"] ?></textarea>
    </div>
    <input type="submit" value="Modifier un jeu">
</form>

<?php
if (isset($_GET["title"]) && isset($_GET["genre"]) && isset($_GET["platform"]) && isset($_GET["rating"])) {
$sql = "UPDATE game SET title = :title, genre = :genre, platform = :platform, rating = :rating WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'title' => $_GET["title"],
    'genre' => $_GET["genre"],
    'platform' => $_GET["platform"],
    'rating' => $_GET["rating"],
    'id' =>
]);
}
?>

<a href="index.php">
    <button type="button">Retour à la liste des jeux</button>
</a>
