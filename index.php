<?php
include 'connexion.php';
$articles = $pdo->query("SELECT * FROM `articles`");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>E-Boutique</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .categorie-select {
    background-color: #ff4f8b;
    color: white;
    border: 2px solid #ff1493;
    padding: 10px 15px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    outline: none;
}

.categorie-select:hover {
    background-color: #ff1493;
}

.categorie-select option {
    background-color: white;
    color: black;
}
    </style>
</head>
<body>

<header>
    <h1>🌸 Kitchen Rose Store Hiba 🌸</h1>
    <nav>
        <a href="index.php">Accueil</a>
        <a href="panier.php">Panier</a>
        <a href="admin&login.php">Admin</a>
        <a href="filtrer.php"> Filtrer </a>
    </nav>
</header>

<div class="container">
    <div class="cards">

        <?php while($article = $articles->fetch()) { ?>

        <div class="card">
            <img src="images/<?php echo $article['image']; ?>">

            <div class="card-body">
                <h3><?php echo $article['nom']; ?></h3>

                <p class="price">
                    <?php echo $article['prix']; ?> DH
                </p>

                <a class="btn" href="details.php?id=<?php echo $article['id']; ?>">
                    Voir détails
                </a>

                <br><br>

                <a class="btn" href="ajouter_panier.php?id=<?php echo $article['id']; ?>">
                    Ajouter au panier
                </a>
            </div>
        </div>

        <?php } ?>

    </div>
</div>

<footer>
    © 2026 - Mini Projet E-Boutique
</footer>

</body>
</html>