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
    <title>API Harry Potter</title>
    <?php
    $api = file_get_contents("https://hp-api.onrender.com/api/characters");
    $apiDecode = json_decode($api, true);
    ?>
</head>
<body>
<div class="container">
    <div class="row">
        <?php foreach ($apiDecode as $character) : if ($character["image"] != "") : ?>
        <div class="col-md-4 card">
            <img class="card-img-top object-fit-cover border rounded" src=<?=$character["image"]?> />
            <h5 class="card-title">Name: <?=$character["name"]?></h5>
            <h6>House: <?=$character["house"]?></h6>
            <p>Date of birth: <?=$character["dateOfBirth"]?></p>
        </div>
        <?php endif; endforeach; ?>
    </div>
</div>
</body>
</html>