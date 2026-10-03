<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de commande</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="form-box">
    <h2>Informations de commande</h2>
    <br>
    <form action="#" method="post">

        <input type="text" id="nom" name="nom" placeholder="Nom et prénom" required><br><br>

        <input type="tel" id="telephone" name="telephone" placeholder="Numéro de téléphone" required><br><br>

        <input type="text" id="cin" name="cin" placeholder="Numéro de la Carte Nationale" required><br><br>

        <select id="paiement" name="paiement" placeholder="Type de paiement" required>
            <option value="">-- Sélectionner --</option>
            <option value="visa">Carte Visa</option>
            <option value="mastercard">Mastercard</option>
            <option value="livraison">Paiement à la livraison</option>
            <option value="virement">Virement bancaire</option>
        </select><br><br>

        <a href="reussi_commande.php" class="btn">Commander</a>

    </form>
    </div>
</div>

</body>
</html>