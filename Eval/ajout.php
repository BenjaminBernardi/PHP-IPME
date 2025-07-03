<form action="index.php?ajout=ok" method="post">
    <label>Nom</label>
    <input type="text" name="nom" required>
    <label>Adresse</label>
    <input type="textarea" name="adresse" required>
    <label>Nombre de pièces</label>
    <input type="number" name="nb_pieces" required>
    <label>Prix</label>
    <input type="number" name="prix" required>
    <button type="submit">Valider</button>
</form>