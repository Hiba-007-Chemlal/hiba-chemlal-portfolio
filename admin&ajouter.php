<?php
include 'connexion.php';
if(isset($_POST['ajouter'])){
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $image = $_POST['image'];
    $req = $pdo->prepare(
        "INSERT INTO articles(nom,description,prix,image)
         VALUES(?,?,?,?)"
    );
    $req->execute([$nom,$description,$prix,$image]);
    header('Location: admin&dashboard.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<div class="form-box">

<h2>Ajouter Article</h2>

<form method="POST">

<input type="text" name="nom" placeholder="Nom">

<textarea name="description" placeholder="Description"></textarea>

<input type="number" step="0.01" name="prix" placeholder="Prix">

<input type="text" name="image" placeholder="Nom image.jpg">

<button class="btn" name="ajouter">
Ajouter
</button>

</form>

</div>

</div>

</body>
</html>