<form method="post">
    <input type="text" name="full-name" placeholder="Nom et prénom">
    <div>
        <input type="radio" id="homme" name="genre[]" value="un homme">
        <label for="homme">Homme</label>
        <input type="radio" id="femme" name="genre[]" value="une femme">
        <label for="femme">Femme</label>
        <input type="radio" id="autre" name="genre[]" value="d'un genre inconnu">
        <label for="autre">Autre</label>
    </div>
    <div>
        <label>Langages de programmation préférés :</label>
        <label for="php">PHP</label>
        <input id="php" type="checkbox" value="PHP" name="checkbox[]">

        <label for="javascript">JavaScript</label>
        <input id="javascript" type="checkbox" value="JavaScript" name="checkbox[]">

        <label for="python">Python</label>
        <input id="python" type="checkbox" value="Python" name="checkbox[]">

        <label for="c#">C#</label>
        <input id="c#" type="checkbox" value="C#" name="checkbox[]">
    </div>
    <div>
        <label>Biographie :</label>
        <textarea id="bio" name="bio" rows="4" cols="50" placeholder="Décrivez-vous en quelques lignes..."></textarea>
    </div>
    <button type="submit">Valider</button>
</form>

<?php if (isset($_POST["full-name"]) && $_POST["full-name"] != "" && isset($_POST["genre"]) && isset($_POST["checkbox"]) && isset($_POST["bio"]) && $_POST["bio"] != "") : ?>
    <p>Bonjour, <?= htmlspecialchars($_POST["full-name"]) ?></p>
    <p>Vous êtes <?= $_POST["genre"][0] ?> et vous aimez coder en :<?php foreach ($_POST["checkbox"] as $items) {
            echo " " . $items;
        } ?>.</p>
    <p>Voici ce que vous avez écrit à propos de vous :</p>
    <p><?= htmlspecialchars($_POST["bio"]) ?></p>
<?php else : ?>
    <p>Une ou plusieurs informations sont manquantes dans le formulaire !</p>
<?php endif; ?>
