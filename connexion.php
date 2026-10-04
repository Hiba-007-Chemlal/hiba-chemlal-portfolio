<?php
$host = "sql202.infinityfree.com";
$dbname = "cuisine";
$username = "if0_43086318";
$password = "N9BzVjWZEpAmCwo";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
session_start();
?>
