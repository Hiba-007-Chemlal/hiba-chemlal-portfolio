<?php
include 'connexion.php';

if(!isset($_SESSION['admin'])){
    header('Location: admin&login.php');
}

$articles = $pdo->query("SELECT * FROM articles");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<div class="container">
<a href="index.php" class="btn">Accueil</a>
<h1>Dashboard Admin</h1>

<br>

<a class="btn" href="admin&ajouter.php"> Ajouter Article </a>
<a class="btn" href="admin&logout.php"> Déconnexion </a>

<table class="table">

<tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prix</th>
    <th>Actions</th>
</tr>

<?php while($article = $articles->fetch()) { ?>

<tr>
    <td><?php echo $article['id']; ?></td>
    <td><?php echo $article['nom']; ?></td>
    <td><?php echo $article['prix']; ?> DH </td>

    <td>
        <a class="btn" href="admin&modifier.php?id=<?php echo $article['id']; ?>">
            Modifier
        </a>

        <a class="btn"
           onclick="return confirmerSuppression()"
           href="admin&supprimer.php?id=<?php echo $article['id']; ?>">
            Supprimer
        </a>
    </td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>