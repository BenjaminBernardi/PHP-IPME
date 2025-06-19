<?php

$api = file_get_contents("https://hp-api.onrender.com/api/characters");
$apiDecode = json_decode($api, true);
var_dump($apiDecode);

?>