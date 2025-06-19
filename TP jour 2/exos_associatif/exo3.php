<?php

$notes = [
    "maths" => 14,
    "francais" => 12,
    "histoire" => 15
];

foreach ($notes as $matiere => $note) {
    echo "<p>La note en " . $matiere . " est : " . $note . "</p>";
}

?>