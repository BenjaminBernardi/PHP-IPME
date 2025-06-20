<?php include "header.php";
$api = file_get_contents("https://ghibliapi.vercel.app/films");
$apiDecode = json_decode($api, true);
?>
<div class="container">
    <div class="row">
        <?php foreach ($apiDecode as $movie) : if ($movie["image"] != "") : ?>
            <div class="col-md-4 card">
                <img src=<?= $movie["image"] ?>/>
                <h5 class="card-title">Title: <?= $movie["title"] ?></h5>
                <p>Description: <?= substr($movie["description"], 0, 300) ?>...</p>
                <a href="item.php?film_id=<?= $movie["id"] ?>">Voir le film</a>
            </div>
        <?php endif; endforeach; ?>
    </div>
</div>
<?php include "footer.php" ?>