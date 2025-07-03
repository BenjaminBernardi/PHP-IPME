## TP PHP : Générer des données fictives avec Faker et les insérer en base

### 🎓 Objectif

Vous allez créer un script PHP qui utilise la librairie [FakerPHP/Faker](https://fakerphp.org) pour générer automatiquement **500 produits** fictifs et les insérer dans une base de données MySQL.

Ce TP vous permettra de :
- vous familiariser avec Composer et les autoloaders
- manipuler une base de données avec PDO
- générer des données variées de façon aléatoire

---

### 📂 Base de données

Utilisez une base nommée `faker_demo` contenant une table `products` avec la structure suivante :

- `id` (INT, auto-increment, PK)
- `name` (VARCHAR 150)
- `description` (TEXT)
- `price` (DECIMAL 10,2)
- `is_available` (BOOLEAN)
- `created_at` (DATETIME)
- `updated_at` (DATETIME)
- `category` (VARCHAR 100)
- `image_url` (VARCHAR 255)

> Le fichier SQL de création vous sera fourni.

---

### ✅ Consignes

1. **Installer Faker** via Composer dans un projet PHP.
2. Créer un script `generate.php` qui :
   - se connecte à la base `faker_demo` avec PDO
   - utilise Faker pour générer 500 produits fictifs
   - insère chaque produit en base avec une requête préparée

---

### 🔍 Contraintes des données générées

Pour chaque produit :

- `name` : un nom de produit court et lisible (3 mots)
- `description` : un paragraphe résumant le produit
- `price` : un prix aléatoire entre 5,00 et 500,00
- `is_available` : 80% de chances qu'il soit disponible
- `created_at` : une date entre il y a 2 ans et il y a 1 mois
  - ex : $faker->dateTimeBetween('-5 years', '-5 month')->format('Y-m-d H:i:s'),
- `updated_at` : une date entre le mois dernier et aujourd'hui
- `category` : une valeur parmi 5 choix possibles (ex: Books, Electronics, Toys, Clothing, Furniture)
- `image_url` : une URL d'image générée avec Faker

---

### 🔧 Aide

- Utilisez `Faker\Factory::create()` pour instancier Faker
- Consultez la documentation des formatteurs ici : [https://fakerphp.org/formatters](https://fakerphp.org/formatters)
- Pensez à afficher un message à la fin pour indiquer que l'insertion s'est bien passée

---

### ⚡ Bonus

- Permettre de spécifier le nombre d'éléments à générer via un paramètre GET ou POST

---
