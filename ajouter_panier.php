<?php
include 'connexion.php';

$id = $_GET['id'];

if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = [];
}

if(isset($_SESSION['panier'][$id])){
    $_SESSION['panier'][$id]++;
}else{
    $_SESSION['panier'][$id] = 1;
}

header('Location: panier.php');
?>