<?php

$arrayUsers = [
    [
        'firstName' => 'Jules',
        'favoriteColor' => 'Bleu',
        'fanKamelott' => true
    ],
    [
        'firstName' => 'Antoine',
        'favoriteColor' => 'Noir',
        'fanKamelott' => true
    ],
    [
        'firstName' => 'Benjamin',
        'favoriteColor' => 'Vert',
        'fanKamelott' => false
    ],

]

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .card-custom {
            padding: 20px;
            border: 1px solid red;
            margin: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

// 1ère solution
<?php
foreach ($arrayUsers as $user) {
    echo "<div class='card-custom'>";
    echo "<p>Je m'appelle <strong>" . $user['firstName'] . "</strong></p>";
    echo "<p>Ma couleur favorite est le <strong>" . $user['favoriteColor'] . "</strong></p>";
    if ($user['fanKamelott'] == true) {
        echo "<p>Je suis fan de Kamelott</p>";
    } else {
        echo "<p>Je ne suis pas fan de Kamelott</p>";
    }
        echo "</div>";
}
?>

// 2ème solution
<?php foreach ($arrayUsers as $user) : ?>
    <div class='card-custom'>
        <p>Je m'appelle <strong><?php echo $user['firstName'] ?></strong></p>
        <p>Ma couleur favorite est le <strong><?php echo $user['favoriteColor'] ?></strong></p>
        <?php if ($user['fanKamelott'] == true) :?>
            <p>Je suis fan de Kamelott</p>
        <?php else :?>
            <p>Je ne suis pas fan de Kamelott</p>
        <?php endif; ?>
    </div>
<?php endforeach; ?>

</body>
</html>