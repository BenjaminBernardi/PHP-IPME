<?php
include "pdo.php";

$sql = "SELECT * FROM game";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$games = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <tr>
        <th>Title</th>
        <th>Genre</th>
        <th>Platform</th>
        <th>Rating</th>
        <th>Action</th>
    </tr>
    <?php foreach ($games as $game) : ?>
    <tr>
        <td><?= $game["title"] ?></td>
        <td><?= $game["genre"] ?></td>
        <td><?= $game["platform"] ?></td>
        <td><?= $game["rating"] ?></td>
        <td>
            <a href=<?= "item.php?id=" . $game["id"] ?>><button type="button">Voir</button></a>
            <a href=<?= "edit.php?id=" . $game["id"] ?>><button type="button">Modifier</button></a>
            <a href=<?= "delete.php?id=" . $game["id"] ?> onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce jeu ?')">
            <button type="button">Supprimer</button></a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php if (isset($_GET["success"]) && $_GET["success"] == 1) {
    $message = "✅ Jeu ajouté avec succès !";
    echo "<script type='text/javascript'>alert('$message');</script>";
} elseif (isset($_GET["updated"]) && $_GET["updated"] == 1) {
    $message = "✏️ Jeu modifié avec succès !";
    echo "<script type='text/javascript'>alert('$message');</script>";
} elseif (isset($_GET["deleted"]) && $_GET["deleted"] == 1) {
    $message = "🗑️ Jeu supprimé avec succès !";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
