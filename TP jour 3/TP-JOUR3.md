# Exercices sur les paramètres GET en PHP

Ces exercices vous permettent de vous entraîner à utiliser les paramètres GET dans l'URL. Pour chaque exercice, vous devez utiliser l'URL fournie (ou en créer une similaire) dans votre navigateur, puis récupérer les données passées en GET à l’aide de PHP.

---

## Exercice 1 : Bonjour l’utilisateur

**Objectif :** Récupérer un prénom passé dans l’URL.

**URL à tester :**  
`http://localhost/exo1.php?prenom=Marie`

**Instructions :**
- Créez un fichier `exo1.php`.
- Affichez : “Bonjour Marie !” (ou un autre prénom en fonction du paramètre GET).
- Si aucun prénom n’est présent, affichez : “Bonjour inconnu !”.

---

## Exercice 2 : Opération simple

**Objectif :** Récupérer deux nombres et afficher leur somme.

**URL à tester :**  
`http://localhost/exo2.php?a=5&b=8`

**Instructions :**
- Créez un fichier `exo2.php`.
- Affichez la somme de `a` et `b`.
- Indiquez aussi les valeurs reçues dans un message clair.

---

## Exercice 3 : Changeur de couleurs

**Objectif :** Modifier la couleur du texte affiché en fonction d’un paramètre GET.

**URL à tester :**  
`http://localhost/exo3.php?couleur=red`

**Instructions :**
- Créez un fichier `exo3.php`.
- Affichez un texte (“Ceci est un texte coloré”) dans la couleur passée en GET.
- Si aucune couleur n’est donnée, utilisez le noir (`black`).

---

## Exercice 4 : Calculette

**Objectif :** Réaliser une opération mathématique selon l’opérateur donné.

**URL à tester :**  
`http://localhost/exo4.php?a=10&b=2&op=div`

**Instructions :**
- Créez un fichier `exo4.php`.
- En fonction de `op` (qui peut être `add`, `sub`, `mul`, `div`), effectuez l’opération sur `a` et `b`.
- Gérez les cas particuliers comme la division par zéro ou une opération inconnue.

---

## Exercice 5 : Générateur de liste

**Objectif :** Afficher une liste HTML contenant les éléments passés en GET.

**URL à tester :**  
`http://localhost/exo5.php?item[]=Pommes&item[]=Bananes&item[]=Cerises`

**Instructions :**
- Créez un fichier `exo5.php`.
- Récupérez les éléments passés sous le paramètre `item[]`.
- Générez une liste HTML `<ul>` contenant chaque fruit dans un `<li>`.

---

Bonne chance ! 🧠
