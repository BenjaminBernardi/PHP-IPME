<?php include "header.php";
if ((isset($_GET["film_id"])) && $_GET["film_id"] != "") :
    $api = file_get_contents("https://ghibliapi.vercel.app/films/" . $_GET["film_id"]);
    $apiDecode = json_decode($api, true); ?>
    <div class="container">
        <h1><?= $apiDecode["title"] ?></h1>
        <img src=<?= $apiDecode["image"] ?>/>
        <p>Description: <?= $apiDecode["description"] ?></p>
        <p>Producer: <?= $apiDecode["producer"] ?></p>
        <p>Release date: <?= $apiDecode["release_date"] ?></p>
        <p>Rotten Tomatoes's score: <?= $apiDecode["rt_score"] ?>%</p>
        <img src=<?= $apiDecode["movie_banner"] ?>/>
        <?php foreach ($apiDecode["people"] as $characters) : ?>
            <p><?=json_decode(file_get_contents($characters), true)["name"]?></p>
        <?php endforeach; ?>
    </div>
<?php endif;
include "footer.php" ?>
