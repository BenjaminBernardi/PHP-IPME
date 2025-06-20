<?php if ((isset($_GET["a"]) && $_GET["a"] != "") && (isset($_GET["b"]) && $_GET["b"] != "")
    && (isset($_GET["op"]) && $_GET["op"] != "")) :

    if ($_GET["op"] == "add") :
        $sumAdd = $_GET["a"] + $_GET["b"]; ?>
        <p>La somme de <?= $_GET["a"] ?> et <?= $_GET["b"] ?> vaut <?= $sumAdd ?> !</p>

    <?php elseif ($_GET["op"] == "sub") :
        $sumSub = $_GET["a"] - $_GET["b"]; ?>
        <p>La soustaction de <?= $_GET["a"] ?> par <?= $_GET["b"] ?> vaut <?= $sumSub ?> !</p>

    <?php elseif ($_GET["op"] == "mul") :
        $sumMul = $_GET["a"] * $_GET["b"]; ?>
        <p>Le produit de <?= $_GET["a"] ?> par <?= $_GET["b"] ?> vaut <?= $sumMul ?> !</p>

    <?php elseif (($_GET["op"] == "div") && ($_GET["b"] == "0")) : ?>
        <p>Erreur : Impossible de diviser par 0</p>

    <?php elseif ($_GET["op"] == "div") :
        $sumDiv = $_GET["a"] / $_GET["b"]; ?>
        <p>Le quotient de <?= $_GET["a"] ?> par <?= $_GET["b"] ?> vaut <?= $sumDiv ?> !</p>

<?php endif; else : ?>
    <p>Valeurs manquantes</p>
<?php endif; ?>