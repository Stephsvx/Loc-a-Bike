<?php
// Vérifier si le formulaire d'inscription est soumis
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "locabikedb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Requête d'insertion des données dans la table "utilisateurs"
    $sql = "INSERT INTO utilisateurs (nom, prenom, email, motdepasse) VALUES ('$nom', '$prenom', '$email', '$motdepasse')";

    if ($conn->query($sql) === TRUE) {
        // Redirection vers la page d'accueil avec le nom de l'utilisateur
        session_start();
        session_start();
        $_SESSION['utilisateur_connecte'] = [
            'id' => $conn->insert_id,
            'prenom' => $prenom,
            'nom' => $nom,
            'email' => $email
        ];
        
        header("Location: connexion.php?nom=$nom");
        exit();
    } else {
        echo "Erreur lors de l'inscription : " . $conn->error;
    }

    // Fermeture de la connexion à la base de données
    $conn->close();
}
?>