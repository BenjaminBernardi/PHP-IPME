
# 🏠 Examen PHP - Gestion de maisons

Durée : 2 heures

## 🎯 Objectif

Créer une mini-application PHP permettant de gérer une liste de maisons (affichage et ajout), avec une base de données MySQL.

---

## 🗂 Structure attendue

- `index.php` : affichage des maisons
- `ajout.php` : formulaire d’ajout d’une maison
- `db.php` : connexion PDO

---

## 📚 Base de données

- Nom : `examen_php_maison`
- Table : `maison` avec les champs :
  - `id` (INT, auto_increment, PK)
  - `nom` (VARCHAR)
  - `adresse` (TEXT)
  - `nb_pieces` (INT)
  - `prix` (INT)

### Script SQL fourni : `maison.sql`

---

## 🔹 `index.php`

- Se connecte à la base de données via `db.php`
- Récupère toutes les maisons et les affiche dans une table HTML
- Si `?ajout=ok` est présent dans l'URL, afficher : "✅ Maison ajoutée avec succès"

---

## 🔹 `ajout.php`

- Affiche un formulaire pour ajouter une maison avec :
  - Nom (texte)
  - Adresse (textarea)
  - Nombre de pièces (nombre)
  - Prix (nombre)
- Envoi en `POST`
- Vérifie que tous les champs sont remplis
- Insère la maison dans la BDD via PDO
- Redirige vers `index.php?ajout=ok`

---

---

## 🔹 `afficher des informations supplémentaires en page d'accueil`

- Afficher en page d'index le nombre total des maisons 
- Afficher en page d'index la SOMME total des maisons

---
```

---

## ✅ Critères d'évaluation

| Critère                                       | Points |
|----------------------------------------------|--------|
| Connexion PDO fonctionnelle                   | 2      |
| Affichage correct des maisons                 | 3      |
| Redirection avec message `ajout=ok`           | 2      |
| Formulaire affiché et opérationnel            | 3      |
| Validation des champs                         | 3      |
| Insertion PDO correcte                        | 4      |
| Code clair, indenté, structuré                | 3      |
| Bonus : sécurité (`htmlspecialchars`, etc.)   | +1     |
