<?php
session_start();

$error = "";

if(isset($_POST['login'])){

    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == "admin" && $pass == "1234"){
        $_SESSION['admin'] = true;
        header('Location: admin&dashboard.php');
    } else {
        $error = "Informations incorrectes";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<a href="index.php" class="btn">Accueil</a>
<div class="form-box">

<h2> Connexion Admin </h2>

<form method="POST">

<input type="text" name="username" placeholder="Nom utilisateur">

<input type="password" name="password" placeholder="Mot de passe">

<button class="btn" name="login"> Connexion </button>

<p><?php echo $error; ?></p>

</form>

</div>

</div>

</body>
</html>