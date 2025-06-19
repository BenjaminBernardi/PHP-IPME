# TP Jour 2 – Algorithmes en PHP (tableau associatif) 🧠

## Structure des fichiers

- `exos_associatif/` : dossier contenant un fichier par exercice (ex : `exo1.php`, `exo2.php`, ...)
- Chaque fichier contient un seul exercice, avec des `echo` pour afficher les résultats.
- pour y accéder donc {votre_serveur}/exo_associatif/exo1.php...

---

## Exercice 1 : Création et affichage d’un tableau associatif simple

Déclare un tableau associatif `$personne` avec les clés `'nom'`, `'prenom'` et `'age'` et des valeurs correspondantes.  
Affiche chaque valeur avec un message clair, par exemple :  
`Nom : Dupont`  
`Prénom : Alice`  
`Âge : 25`

💡 **Concepts utiles** : tableaux associatifs, accès aux éléments avec les clés, `echo`

---

## Exercice 2 : Modifier et ajouter des éléments dans un tableau associatif

À partir du tableau `$personne` précédent, modifie la valeur de `'age'` en 26.  
Ajoute une nouvelle clé `'ville'` avec la valeur `'Paris'`.  
Utilise `var_dump()` pour afficher le tableau modifié.

💡 **Concepts utiles** : modification d'éléments, ajout d'éléments, `var_dump()`

---

## Exercice 3 : Parcourir un tableau associatif avec foreach

Déclare un tableau associatif `$notes` avec les matières en clés (`'maths'`, `'francais'`, `'histoire'`) et les notes en valeurs.  
Parcours ce tableau avec `foreach` et affiche à chaque tour :  
`La note en [matière] est : [note]`

💡 **Concepts utiles** : boucle `foreach`, accès clé et valeur, `echo`

---

## Exercice 4 : Trouver la matière avec la meilleure note

Utilise le tableau `$notes` de l'exercice précédent.  
Écris un script qui trouve et affiche la matière où la note est la plus élevée, par exemple :  
`La meilleure note est en maths : 18`

💡 **Concepts utiles** : parcours avec `foreach`, variables temporaires pour comparer, conditions `if`, `echo`

---

## Exercice 5 : Inverser un tableau associatif (clé <-> valeur)

Déclare un tableau associatif `$couleurs` avec des clés `'rouge'`, `'bleu'`, `'vert'` associées à des codes hexadécimaux (ex: `#FF0000`).  
Écris un script qui crée un nouveau tableau où les clés sont les codes hexadécimaux et les valeurs les noms des couleurs.  
Utilise `var_dump()` pour afficher ce nouveau tableau.

💡 **Concepts utiles** : création d’un nouveau tableau, parcours `foreach`, assignation dynamique de clés et valeurs, `var_dump()`
