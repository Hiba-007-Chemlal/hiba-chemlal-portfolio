<?php
include 'connexion.php';
$id_cat = isset($_GET['cat']) ? intval($_GET['cat']) : null;
if ($id_cat) {
    $stmt = $pdo->prepare("SELECT * FROM articles WHERE id_categories = :id_cat");
    $stmt->execute(['id_cat' => $id_cat]);
} else {
    $stmt = $pdo->query("SELECT * FROM articles");
}

$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Filtrer les articles</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .menu { margin-bottom: 30px; }
        .article { margin-bottom: 25px; padding-bottom: 15px; border-bottom: 1px solid #eee; }
        .prix { font-weight: bold; color: #333; }
    </style>
</head>
<body>

    <h2>Filtrer les articles par catégorie</h2>
    <br>
    <div class="menu">
        <a href="index.php" class="btn <?php echo !$id_cat ? 'active' : ''; ?>">Page d'accueil</a>
        <a href="filtrer.php" class="btn <?php echo !$id_cat ? 'active' : ''; ?>">Tout afficher</a>
        <a href="filtrer.php?cat=1" class="btn <?php echo $id_cat == 1 ? 'active' : ''; ?>">Machines</a>
        <a href="filtrer.php?cat=2" class="btn <?php echo $id_cat == 2 ? 'active' : ''; ?>">Couverts de table</a>
    </div>

    <hr>

    <div class="liste-articles">
        <?php if (count($articles) > 0): ?>
            <?php foreach ($articles as $article): ?>
                <div class="article">
                    <h3><?=$article['nom']; ?></h3>
                    <p><?=$article['description']; ?></p>
                    <p class="prix"><?php echo number_format($article['prix'], 2, '.', ''); ?> DH</p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun article trouvé dans cette catégorie.</p>
        <?php endif; ?>
    </div>

</body>
</html>