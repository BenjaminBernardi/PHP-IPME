<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=spotify;charset=utf8',
    'root',
    ''
);
var_dump($pdo);

/**
 * RECUPERER PLUSIEURS LIGNES
 */

// écrire en TEXTE la requête
$sql = "SELECT * FROM song";

// on la prépare
$stmt = $pdo->prepare($sql);

// on l'execute
$stmt->execute();

// on récupère les datas
// fetchALL -> récupère PLUSIEURS LIGNES
// FETCH_ASSOC -> récupère les valeurs sous formes de tableau assoc
$songs = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($songs);

/**
 * RECUPERER UNE LIGNE DE SONG PAR SON ID
 */

$sql = "SELECT * FROM song WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => 1]);

// utilisation de fetch tout court rend un seul résultat
$song = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($song);

/**
 * RECUPERER UNE LIGNE DE SONG PAR SON TITLE
 */

$sql = "SELECT * FROM song WHERE title = :title";
$stmt = $pdo->prepare($sql);
$stmt->execute(['title' => 'Headhunterz - Dragonborn']);
$song = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($song);

/**
 * INSERER UNE MUSIQUE
 *
* $sql = "INSERT INTO song (title, description, note) VALUES (:title, :description, :note)";
* $stmt = $pdo->prepare($sql);
* $stmt->execute([
    * 'title' => 'Ran-D - Zombie',
    * 'description' => 'In your heeeeeeead !!!',
    * 'note' => 10
 * ]);
 */

/**
 * INSERER PLUSIEURS MUSIQUES
 *
$songs = [
    ['title' => 'Adaro', 'description' => 'For the street!', 'note' => 8],
    ['title' => 'Unresolved', 'description' =>  'West coast!', 'note' => 7],
    ['title' => 'Rejecta', 'description' => 'I m the resurrector!', 'note' => 9],
];

$sql = "INSERT INTO song (title, description, note) VALUES (:title, :description, :note)";
$stmt = $pdo->prepare($sql);

foreach ($songs as $song) {
    $stmt->execute($song);
}*/

/**
 * SUPPRIMER UNE MUSIQUE PAR SON ID
 */

$sql = "DELETE FROM song WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => 2]);

/**
 * MODIFIER UN PARAMETRE
 */

$sql = "UPDATE song SET description = :description WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'description' => 'MF, Goooo!!!',
    'id' => 1
]);

?>