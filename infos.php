<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations de l'Utilisateur</title>
</head>
<body>

<?php
// Inclure le header
include('header.php');
?>

<!-- Contenu de la page -->
<h1>Informations de l'Utilisateur</h1>

<?php
// Vérifier si les données de la session existent
if(isset($_SESSION['nom']) && isset($_SESSION['email']) && isset($_SESSION['genre']) && isset($_SESSION['sujet']) && isset($_SESSION['message'])) {
    // Récupérer les données de la session
    $nom = htmlspecialchars($_SESSION["nom"]);
    $email = htmlspecialchars($_SESSION["email"]);
    $genre = htmlspecialchars($_SESSION["genre"]);
    $sujet = htmlspecialchars($_SESSION["sujet"]);
    $message = htmlspecialchars($_SESSION["message"]);

    // Afficher les informations de l'utilisateur
    echo "<p>Votre nom : $nom</p>";
    echo "<p>Votre adresse mail : $email</p>";
    echo "<p>Genre : $genre</p>";
    echo "<p>Le sujet : $sujet</p>";
    echo "<p>Le message : $message";

    // Effacer les données de la session après affichage
    unset($_SESSION["nom"]);
    unset($_SESSION["email"]);
    unset($_SESSION["genre"]);
    unset($_SESSION["sujet"]);
    unset($_SESSION["message"]);
} else {
    // Redirection si les données de la session n'existent pas
    header("Location: index.php");
    exit();
}

// Inclure le footer
include('footer.php');