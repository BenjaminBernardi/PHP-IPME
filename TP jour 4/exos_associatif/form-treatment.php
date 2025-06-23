<?php
if (isset($_POST["country"]) && $_POST["country"] != "") {
    $trimmed = trim($_POST["country"]);
    $api = json_decode(file_get_contents("https://restcountries.com/v3.1/name/" . $trimmed . "?fullText=true"), true);
}

var_dump($api);
?>