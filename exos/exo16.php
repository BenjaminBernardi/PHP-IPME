<?php

$mysteres = [38, 72, 15];
$compteur = 0;
$number = rand(1, 100);

foreach ($mysteres as $items) {
    $compteur++;
    while ($number != $items) {
        $number = rand(1, 100);
        $compteur++;
    }
    echo "<p>Nombre mystère " . $items . " trouvé en " . $compteur . " essai(s)</p>";
}

?>