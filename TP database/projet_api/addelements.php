<?php
include "pdo.php";

$api = file_get_contents("https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/periodic-table@datastro/records?limit=0");
$apiDecode = json_decode($api, true)["results"];

if (count($apiDecode) > 0) {
    foreach ($apiDecode as $element) {
        $sql = "INSERT INTO elements (name, symbol, atomic_number, group_block, year_discovered, atomic_mass, standard_state, bonding_type, density) 
        VALUES (:name, :symbol, :atomic_number, :group_block, :year_discovered, :atomic_mass, :standard_state, :bonding_type, :density)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            "name" => $element["name"],
            "symbol" => $element["symbol"],
            "atomic_number" => $element["atomicnumber"],
            "group_block" => $element["groupblock"],
            "year_discovered" => $element["yeardiscovered"],
            "atomic_mass" => $element["atomicmass"],
            "standard_state" => $element["standardstate"],
            "bonding_type" => $element["bondingtype"],
            "density" => $element["density"]
        ]);
    }
} else {
    echo "Aucune valeur a ajouter";
}

var_dump($apiDecode);

?>

<a href="index.php">
    <button type="button">Menu principal</button>
</a>
