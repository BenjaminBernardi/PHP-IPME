<?php
include "pdo.php";

if (isset($_GET["id"]) && $_GET["id"] != "") {
    $sql = "DELETE FROM game WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET["id"]]);
    header("Location: http://localhost:8080/exos_CRUD/index.php?deleted=1");
}
?>