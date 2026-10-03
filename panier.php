<?php
include 'connexion.php';
$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Panier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <a href="index.php" class="btn">Accueil</a>
<h1> 🛒 Mon Panier </h1>
<table class="table">
<tr>
    <th>Article</th>
    <th>Prix</th>
    <th>Quantité</th>
    <th>Total</th>
    <th>Action</th>
</tr>

<?php
if(isset($_SESSION['panier'])){
foreach($_SESSION['panier'] as $id => $qte){

    $req = $pdo->prepare("SELECT * FROM articles WHERE id=?");
    $req->execute([$id]);

    $article = $req->fetch();

    $sousTotal = $article['prix'] * $qte;
    $total += $sousTotal;
?>

<tr>
    <td><?php echo $article['nom']; ?></td>
    <td><?php echo $article['prix']; ?> DH</td>
    <td><div>
            <button onclick="moins()" style="background-color:pink;border: radius 20px; width:20px; height:30px;">-</button>
            <input type="text" id="qte" value="1" readonly
                    style="width:40px; text-align:center;">
            <button onclick="plus()" style="background-color:pink;border: radius 20px; width:20px; height:30px;">+</button>
        </div>
    </td>
    <td><?php echo $sousTotal; ?> DH</td>

    <td>
        <a class="btn" href="supprimer_panier.php?id=<?php echo $id; ?>">
            Retirer
        </a>
    </td>
</tr>

<?php
}
}
?>

<tr>
    <th colspan="3">Total Général</th>
    <th><?php echo $total; ?> DH</th>
    <th></th>
</tr>

</table>

<br>

<a class="btn" href="commande.php">Commander</a>

</div>

</body>
</html>