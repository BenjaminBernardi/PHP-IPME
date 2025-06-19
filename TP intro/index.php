<?php

$myVar = "Hello tout le monde !";

// echo permet d'afficher des éléments sur la page.
echo $myVar;

// permet d'écrire un paragraphe contenant la valeur de $myVar.
echo "<p>" . $myVar . "<p>";

$tableau = [20, 12, 23];
var_dump($tableau);

// ne fonctionne pas !
// echo $tableau;

// boucle for
// affiche chaque élément du tableau les uns à la suite des autres.
for($i = 0; $i < count($tableau); $i++) {
    echo $tableau[$i] . " ";
}

// boucle foreach
foreach($tableau as $item) {
    echo $item;
}

phpinfo();

?>