<?php if (isset($_GET["prenom"])) : ?>
<p>Bonjour <?=$_GET["prenom"]?> !</p>
<?php else : ?>
<p>Bonjour inconnu !</p>
<?php endif; ?>