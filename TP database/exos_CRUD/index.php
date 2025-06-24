<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=mygames;charset=utf8',
    'root',
    ''
);
var_dump($pdo);

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
</table>
