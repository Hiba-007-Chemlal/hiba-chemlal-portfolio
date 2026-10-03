<!DOCTYPE html>
<html>
<head>
    <title>Details Produit</title>
    <script src="script.js"></script>
    <style>
        body{
            font-family: 'Segoe UI', sans-serif;
            background: pink;
        }
        .details-container{
            width: 70%;
            margin: 50px auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
            display: flex;
            overflow: hidden;
        }

        .details-container img{
            width: 50%;
            height: 500px;
            object-fit: cover;
        }

        .details-content{
            padding: 30px;
            width: 50%;
        }

        .details-content h1{
            font-size: 28px;
            color: #333;
        }

        .details-content p{
            font-size: 18px;
            color: #666;
            margin-top: 15px;
        }

        .price{
            font-size: 25px;
            color: #0f0f0f;
            font-weight: bold;
            margin-top: 20px;
        }

        .btn{
            display: inline-block;
            margin-top: 25px;
            padding: 12px 25px;
            background: #ff4081;
            color: white;
            border-radius: 10px;
            text-decoration: none;
        }

        .btn:hover{
            transform: scale(1.05);
        }
    </style>

</head>

<body>

<?php
include("connexion.php");
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM articles WHERE id = ?");
$stmt->execute([$id]);
$article = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="details-container">
    <img src="images/<?php echo $article['image']; ?>">
        <div class="details-content">
            <h1><?php echo $article['nom']; ?></h1>
            <p><?php echo $article['description']; ?></p>
            <div class="price">
                <?php echo $article['prix']; ?> DH
            </div>
            <br>
            <div>
                <button onclick="moins()" style="background-color:pink;border: radius 20px;">-</button>
                <input type="text" id="qte" value="1" readonly
                       style="width:40px; text-align:center;">
                <button onclick="plus()" style="background-color:pink;border: radius 20px;">+</button>
            </div>
            <a href="commande.php?id=<?php echo $article['id']; ?>&qte=1" class="btn"> Commander </a>
            <br>
            <a href="index.php" class="btn">Retour</a> 
        </div>
</div> 
</body>
</html>