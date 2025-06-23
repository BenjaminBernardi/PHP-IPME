<?php
if (isset($_POST["country"]) && $_POST["country"] != "") {
    $trimmed = rawurlencode(trim($_POST["country"]));
    $test = @file_get_contents("https://restcountries.com/v3.1/name/" . $trimmed . "?fullText=true");
    if ($test == false) {
        header("Location: http://localhost:8080/exos_associatif/form-country.php");
        exit;
    } else {
        $test = file_get_contents("https://restcountries.com/v3.1/name/" . $trimmed . "?fullText=true");
        $api = (json_decode(file_get_contents("https://restcountries.com/v3.1/name/" . $trimmed . "?fullText=true"), true));
        foreach ($api as $country) : if ($country["name"]["official"] != "") : ?>
            <h2><?= htmlspecialchars($country["name"]["official"]) ?></h2>
            <h3>Capital : <?= htmlspecialchars($country["capital"][0]) ?></h3>
            <p>Population : <?= htmlspecialchars(number_format($country["population"], 0, ",", " ")) ?></p>
            <p>Region : <?= htmlspecialchars($country["region"]) ?></p>
            <img src=<?= htmlspecialchars($country["flags"]["png"]) ?>>
        <?php else : ?>
            <h2>Pays introuvable</h2>
        <?php endif; endforeach;
        var_dump($api);
    }
}
?>