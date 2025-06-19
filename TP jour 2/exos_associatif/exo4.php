<?php

$notes = [
    "maths" => 14,
    "francais" => 12,
    "histoire" => 15
];
$bestNote = 0;
$bestMatiere = "";

foreach ($notes as $matiere => $note) {
    if ($note > $bestNote) {
        $bestNote = $note;
        $bestMatiere = $matiere;
    }
}

echo "La meilleure note est en " . $bestMatiere . " : " . $bestNote;

?>