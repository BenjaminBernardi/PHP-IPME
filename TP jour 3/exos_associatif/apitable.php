<?php
$api = file_get_contents("https://ghibliapi.vercel.app/films");
$apiDecode = json_decode($api, true);
var_dump($apiDecode);
?>