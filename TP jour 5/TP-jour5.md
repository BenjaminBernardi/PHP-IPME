## Exercice 1 : Compteur de visites par page avec `$_SESSION`

Vous allez créer **4 fichiers PHP** :

- `accueil.php`
- `contact.php`
- `test.php`
- `random.php`

---

### Objectif :

Mettre en place un **compteur de visites** en utilisant `$_SESSION` pour savoir combien de fois chaque page a été visitée **pendant la session en cours**.

---

### Consignes :

1. Sur **chaque page**, démarrez la session avec `session_start()` en haut du fichier.
2. À chaque chargement d'une page (`contact.php`, `test.php`, etc.), vous devez **incrémenter dans `$_SESSION` un compteur** correspondant à cette page.
3. Sur la page `accueil.php`, affichez un **récapitulatif de toutes les pages** visitées avec le nombre de visites.
    - Exemple d'affichage :

```
- La page accueil a été visitée 3 fois

- La page contact a été visitée 5 fois

- La page test a été visitée 1 fois

- La page random a été visitée 4 fois
```

### Bonus (facultatif) :

- Ajouter un lien sur chaque page vers les 3 autres pages.
- Ajouter un bouton "Réinitialiser les compteurs" sur `accueil.php` qui vide à zero le/les compteur(s) dans :  `$_SESSION`.




## Exercice 2 : Simuler un système de connexion en PHP avec les sessions

### Objectif :

Mettre en place un système de connexion simple en PHP, avec gestion de session. L'utilisateur se connecte depuis un formulaire, et si ses identifiants sont valides, il est redirigé vers la page d'accueil où son statut est affiché.

---

### Fichiers à créer :

- `index.php`
- `login.php`

---

### Données des utilisateurs :

Vous disposez d'un tableau d'utilisateurs déclaré directement dans `login.php`. Voici un exemple :

```php
$users = [
  ["login" => "alice", "password" => "1234"],
  ["login" => "bob", "password" => "azerty"],
  ["login" => "charlie", "password" => "mdp"],
  ["login" => "david", "password" => "pass123"],
  ["login" => "eve", "password" => "12345"],
  ["login" => "frank", "password" => "secret"],
  ["login" => "grace", "password" => "abc123"],
  ["login" => "heidi", "password" => "pwdpwd"],
  ["login" => "ivan", "password" => "0000"],
  ["login" => "judy", "password" => "monkey"],
];
```

---

### Déroulement :

#### 1. `login.php`

- Créer un formulaire HTML avec deux champs : **login** et **mot de passe**.
- Lorsque le formulaire est soumis :
    - Vérifier si un utilisateur du tableau correspond au login fourni.
    - Si le login n'existe pas ou si le mot de passe est incorrect : afficher un message d'erreur (dans la page HTML, sous le formulaire).
    - Si les identifiants sont valides :
        - Stocker les informations de l'utilisateur en `$_SESSION` (par exemple : `$_SESSION['user'] = [ ... ]`).
        - Rediriger vers `index.php`.

#### 2. `index.php`

- Démarrer la session.
- Si un utilisateur est connecté (`$_SESSION['user']` existe), afficher un message :
  > Vous êtes connecté en tant que **xxxxx**.
- Sinon, afficher :
  > Vous n'êtes pas connecté.

---

### Contraintes techniques :

- Vous devez utiliser `session_start()` en haut de chaque page qui manipule `$_SESSION`.
- Aucune base de données n'est utilisée ici, toutes les données utilisateurs sont dans un tableau PHP.
- Pour rediriger en PHP, utilisez `header('Location: index.php')` puis `exit`.

---

### Bonus (facultatif) :

- Ajouter un lien sur `index.php` pour se déconnecter. En cliquant dessus, l'utilisateur est redirigé vers `login.php` et la session est réinitialisée (`session_destroy()`).

