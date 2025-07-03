<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
            crossorigin="anonymous"></script>
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

$nbMaisons = 0;
$prixTotal = 0;
?>

<div class="container">
    <h1 class="text-center">Gestion de maisons</h1>
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
                <td><?= htmlspecialchars(number_format($element["prix"], 0, ",", " ")) ?> €</td>
            </tr>
            <?php
            $nbMaisons++;
            $prixTotal += $element["prix"];
        endforeach;
        ?>
    </table>
    <p class="lead">Nombre total de maisons: <?= $nbMaisons ?></p>
    <p class="lead">Somme des maisons: <?= number_format($prixTotal, 0, ",", " ") ?> €</p>
    <a href=ajout.php>
        <button type="button" class="btn btn-primary">Ajouter une maison</button>
    </a>
</div>
</body>
</html>