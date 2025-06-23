<form action="traitement.php" method="post">
    <label for="test-input">Test input</label>
    <input type="text" id="test-input" name="test-input">

    <div>
        <label for="checkbox 1">checkbox 1</label>
        <input id="checkbox 1" type="checkbox" value="1" name="checkbox[]">

        <label for="checkbox 2">checkbox 2</label>
        <input id="checkbox 2" type="checkbox" value="2" name="checkbox[]">

        <label for="checkbox 3">checkbox 3</label>
        <input id="checkbox 3" type="checkbox" value="3" name="checkbox[]">
    </div>

    <button type="submit">Valider</button>
</form>

<?php
var_dump($_POST);
?>
