<?php

$api = file_get_contents("https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/periodic-table@datastro/records?limit=100");
$apiDecode = json_decode($api, true);
var_dump($apiDecode);

?>