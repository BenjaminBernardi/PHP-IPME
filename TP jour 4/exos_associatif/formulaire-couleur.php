<form method="post">
    <input type="text" name="prenom" placeholder="Votre prénom (obligatoire)">
    <select name="couleur">
        <option value="white">Blanc</option>
        <option value="lightblue">Bleu clair</option>
        <option value="lightgreen">Vert clair</option>
        <option value="lightpink">Rose clair</option>
        <option value="beige">Beige</option>
    </select>
    <button type="submit">Valider</button>
</form>

<?php
if (isset($_POST['prenom']) && $_POST['prenom'] != "" && isset($_POST['couleur'])) : ?>
    <body style="background-color: <?=htmlspecialchars($_POST['couleur'])?>">
    <p>Bonjour, <?= htmlspecialchars($_POST['prenom']) ?>!</p>
    <p>Ta couleur préférée est le <?= htmlspecialchars($_POST['couleur']) ?>.</p>
    </body>
<?php else : ?>
    <p>Bienvenue ! Choisis ta couleur préférée.</p>
<?php endif; ?>