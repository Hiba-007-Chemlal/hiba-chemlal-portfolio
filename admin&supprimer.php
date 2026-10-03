<?php
include 'connexion.php';
$id = $_GET['id'];
$req = $pdo->prepare("DELETE FROM articles WHERE id=?");
$req->execute([$id]);
header('Location: admin&dashboard.php');
?>