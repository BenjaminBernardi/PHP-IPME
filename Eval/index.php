<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion de maisons</title>
</head>
<body>
<?php
include "db.php";

if (isset($_GET["ajout"]) && $_GET["ajout"] == "ok") {
    $message = "✅ Maison ajoutée avec succès";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

if (isset($_POST['nom']) && isset($_POST['adresse']) && isset($_POST['nb_pieces']) && isset($_POST['prix'])) {
    $sql = "INSERT INTO maison (nom, adresse, nb_pieces, prix) VALUES (:nom, :adresse, :nb_pieces, :prix)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'nom' => htmlspecialchars($_POST['nom']),
        'adresse' => htmlspecialchars($_POST['adresse']),
        'nb_pieces' => htmlspecialchars($_POST['nb_pieces']),
        'prix' => htmlspecialchars($_POST['prix'])
    ]);
}

$sql = "SELECT * FROM maison";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$elements = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT COUNT(*) AS nb_maisons FROM maison";
$stmt = $pdo->prepare($sql);
$nbMaisons = $stmt->execute();

?>
<table class="table">
    <tr>
        <th>Nom</th>
        <th>Adresse</th>
        <th>Nombre de pièces</th>
        <th>Prix</th>
    </tr>
    <?php foreach ($elements as $element) : ?>
        <tr>
            <td><?= htmlspecialchars($element["nom"]) ?></td>
            <td><?= htmlspecialchars($element["adresse"]) ?></td>
            <td><?= htmlspecialchars($element["nb_pieces"]) ?></td>
            <td><?= htmlspecialchars($element["prix"]) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>