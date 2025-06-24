<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=mygames;charset=utf8',
    'root',
    ''
);

$sql = "SELECT * FROM game";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$games = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($games);

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
            <a href=<?= "delete.php?id=" . $game["id"] ?>><button type="button">Supprimer</button></a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
