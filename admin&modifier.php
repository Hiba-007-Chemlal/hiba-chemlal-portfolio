<?php
include 'connexion.php';

$id = $_GET['id'];

$req = $pdo->prepare("SELECT * FROM articles WHERE id=?");
$req->execute([$id]);

$article = $req->fetch();

if(isset($_POST['modifier'])){

    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];

    $update = $pdo->prepare(
        "UPDATE articles
         SET nom=?, description=?, prix=?
         WHERE id=?"
    );

    $update->execute([$nom,$description,$prix,$id]);

    header('Location: admin&dashboard.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modifier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
 <a href="index.php" class="btn">Accueil</a>
<div class="form-box">

<h2>Modifier Article</h2>

<form method="POST">

<input type="text"
       name="nom"
       value="<?php echo $article['nom']; ?>">

<textarea name="description">
<?php echo $article['description']; ?>
</textarea>

<input type="number"
       step="1"
       name="prix"
       value="<?php echo $article['prix']; ?>">

<button class="btn" name="modifier">
Modifier
</button>

</form>

</div>

</div>

</body>
</html>