<?php include "pdo.php"; ?>

<form method="get">
    <div>
        <label>Title: </label>
        <input type="text" name="title" required>
    </div>
    <div>
        <label>Genre: </label>
        <input type="text" name="genre" required>
    </div>
    <div>
        <label>Platform: </label>
        <input type="text" name="platform" required>
    </div>
    <div>
        <label>Rating: </label>
        <input type="text" name="rating" required>
    </div>
    <input type="submit" value="Ajouter un jeu">
</form>

<?php
if (isset($_GET["title"]) && isset($_GET["genre"]) && isset($_GET["platform"]) && isset($_GET["rating"])) {
    $sql = "INSERT INTO game (title, genre, platform, rating) VALUES (:title, :genre, :platform, :rating)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'title' => $_GET["title"],
        'genre' => $_GET["genre"],
        'platform' => $_GET["platform"],
        'rating' => $_GET["rating"]
    ]);
    header("Location: http://localhost:8080/exos_CRUD/index.php?success=1");
}
?>

<a href="index.php">
    <button type="button">Retour à la liste des jeux</button>
</a>
