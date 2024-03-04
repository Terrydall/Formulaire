<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $genre = htmlspecialchars($_POST["genre"]);
    $sujet = htmlspecialchars($_POST["sujet"]);
    $message = htmlspecialchars($_POST["message"]);

    // Validation des champs
    $erreurs = array();

    if (empty($nom)) {
        $erreurs[] = "Le champ Nom est requis.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "L'adresse e-mail n'est pas valide.";
    }

    if (empty($genre)) {
        $erreurs[] = "Le champ Genre est requis.";
    }

    if (empty($sujet)) {
        $erreurs[] = "Le champ Sujet est requis.";
    }

    if (empty($message)) {
        $erreurs[] = "Le champ Message est requis.";
    }

    // Si aucune erreur, enregistrer les données dans la session
    if (empty($erreurs)) {
        $_SESSION['nom'] = $nom;
        $_SESSION['email'] = $email;
        $_SESSION['genre'] = $genre;
        $_SESSION['sujet'] = $sujet;
        $_SESSION['message'] = $message;
        header("Location: infos.php");
        exit();
    } else {
        // Afficher les erreurs
        echo "<h2>Erreurs :</h2>";
        echo "<ul>";
        foreach ($erreurs as $erreur) {
            echo "<li>$erreur</li>";
        }
        echo "</ul>";
    }
} else {
    // Redirection si le formulaire n'est pas soumis via POST
    header("Location: index.php");
    exit();
}
?>