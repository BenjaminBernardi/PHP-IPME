<?php
session_start();

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
?>

<form method="post">
    <div>
        <label>Identifiant</label>
        <input type="text" name="login" required>
    </div>
    <div>
        <label>Mot de passe</label>
        <input type="text" name="password" required>
    </div>
    <div>
        <button type="submit">Valider</button>
    </div>
</form>

<?php if (isset($_POST["login"]) && $_POST["login"] != "" && isset($_POST["password"]) && $_POST["password"] != "") {
    foreach ($users as $id) {
         if ($id["login"] == $_POST["login"]) {
             echo "Cet identifiant existe déjà.";
             exit();
         }
    }
    $_SESSION["user"] = $_POST["login"];
    header("Location: http://localhost:8080/exo2/index.php");
}
