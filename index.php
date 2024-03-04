<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
</head>
<body>

<?php include('header.php'); ?>

<h1>Contactez-nous</h1>

<form action="traitement.php" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br>

    <label for="genre">Genre :</label>
    <select id="genre" name="genre" required>
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
        <option value="non genré">Non Genré</option>
        <!-- Ajoutez d'autres options au besoin -->
    </select><br>

    <label for="sujet">Sujet :</label>
    <input type="text" id="sujet" name="sujet" required><br>

    <label for="message">Message :</label>
    <textarea id="message" name="message" rows="4" required></textarea><br>

    <input type="submit" value="Envoyer">
</form>

<?php include('footer.php'); ?>

</body>
</html>