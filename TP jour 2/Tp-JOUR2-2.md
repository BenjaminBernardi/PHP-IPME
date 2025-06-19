## Exercice 1 : Afficher un titre HTML avec une variable

Déclare une variable PHP `$titre = "Bienvenue sur mon site";`.  
Écris un script qui affiche ce texte dans une balise `<h1>` HTML.

💡 **Concepts utiles** : interpolation de variables dans du HTML, `echo`

---

## Exercice 2 : Afficher une liste HTML à partir d’un tableau simple

Déclare un tableau `$fruits = ['Pomme', 'Banane', 'Cerise'];`.  
Écris un script PHP qui génère une liste HTML `<ul>` contenant chaque fruit dans une `<li>`.

💡 **Concepts utiles** : boucle `foreach`, concaténation ou interpolation, balises HTML

---

## Exercice 3 : Afficher un tableau HTML à partir d’un tableau associatif

Voici un tableau associatif à copier-coller :
```php
$personne = [
  'Nom' => 'Dupont',
  'Prénom' => 'Alice',
  'Âge' => 25,
  'Ville' => 'Paris'
];
```

Écris un script PHP qui affiche ce tableau sous forme d’un tableau HTML `<table>` avec deux colonnes : une pour la clé, une pour la valeur.

💡 **Concepts utiles** : tableau associatif, boucle `foreach`, structure HTML `<table>`, concaténation ou interpolation

---

## Exercice 4 : Afficher une liste HTML avec conditions (`if` / `endif`)

Voici un tableau associatif :
```php
$produits = [
  ['nom' => 'Chaise', 'stock' => 5],
  ['nom' => 'Table', 'stock' => 0],
  ['nom' => 'Lampe', 'stock' => 3]
];
```

Affiche une liste `<ul>` où chaque produit est dans un `<li>`.  
Si le stock est 0, affiche "(Rupture de stock)" à côté du nom.  
Utilise la syntaxe alternative de contrôle PHP pour les conditions :
```php
if(condition) :  
  // code  
endif;
```

💡 **Concepts utiles** : tableau multidimensionnel, conditions `if() : / endif;`, boucle `foreach`, affichage HTML

---

## Exercice 5 : Générer un menu de navigation HTML dynamique avec tableau associatif contenant labels et URLs

Voici un tableau associatif représentant un menu, où chaque clé est le label du lien, et la valeur est l’URL correspondante :
```php
$menu = [
  'Google' => 'https://google.fr',
  'Amazon' => 'https://www.amazon.fr/',
  'Spotify' => 'https://open.spotify.com/intl-fr',
  'Youtube' => 'https://www.youtube.com/'
];
```

Écris un script PHP qui génère un menu de navigation `<nav><ul>` avec un `<li>` par entrée.  
Chaque élément `<li>` doit contenir un lien `<a href="URL">Label</a>`, où `URL` et `Label` viennent du tableau.

💡 **Concepts utiles** :
- tableau associatif
- boucle `foreach` pour parcourir clé et valeur
- génération dynamique de balises HTML avec `echo` ou syntaxe alternative
- balises HTML `<nav>`, `<ul>`, `<li>`, `<a>`

