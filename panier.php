<?php
require_once('connect.php');
session_start();

<<<<<<< Updated upstream
// Ajouter un produit au panier
function ajouterProduitAuPanier($idProduit, $nomProduit, $prixProduit) {
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }
=======
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "locabikedb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loc'A Bike</title>
</head>
<body>
    
<div class="parent9">
    <div class="titre"><h1>Mon Panier</h1></div>
</div>

<div class="parent10">
<div class="tableau"> 
    <table>
        <tr>
            <th>Image</th>
            <th>Produits</th>
            <th>Prix</th>
            <th>Quantité</th>
        </tr>
    </table>
</div>
</div>
>>>>>>> Stashed changes

    // Vérifier si le produit est déjà dans le panier
    if (isset($_SESSION['panier'][$idProduit])) {
        // Le produit existe déjà dans le panier, augmenter la quantité
        $_SESSION['panier'][$idProduit]['quantite']++;
    } else {
        // Le produit n'existe pas dans le panier, l'ajouter avec une quantité de 1
        $_SESSION['panier'][$idProduit] = array(
            'nom' => $nomProduit,
            'prix' => $prixProduit,
            'quantite' => 1
        );
    }
}

<<<<<<< Updated upstream
// Supprimer un produit du panier
function supprimerProduitDuPanier($idProduit) {
    if (isset($_SESSION['panier'][$idProduit])) {
        unset($_SESSION['panier'][$idProduit]);
    }
=======
<style>
.parent9 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.titre { grid-area: 1 / 1 / 2 / 6; }

.titre h1 {
    display: flex;
    justify-content: center;
    align-items: center;
}

th, td {
    padding: 15px 20px;
}

th {
    background-color: #c8c8ce;
    width: 500px;
}

tbody tr, td, th {
    border: 1px solid #8f8888;
>>>>>>> Stashed changes
}

// Vider le panier
function viderPanier() {
    unset($_SESSION['panier']);
}

// Afficher le contenu du panier
function afficherPanier() {
    if (!isset($_SESSION['panier']) || count($_SESSION['panier']) == 0) {
        echo "Le panier est vide.";
        return;
    }

    echo "<table>";
    echo "<tr><th>Nom</th><th>Prix</th><th>Quantité</th></tr>";

    foreach ($_SESSION['panier'] as $idProduit => $produit) {
        echo "<tr>";
        echo "<td>" . $produit['nom'] . "</td>";
        echo "<td>" . $produit['prix'] . " €</td>";
        echo "<td>" . $produit['quantite'] . "</td>";
        echo "<td><a href='supprimer_produit.php?id=" . $idProduit . "'>Supprimer</a></td>";
        echo "</tr>";
    }

    echo "</table>";
}

// Exemple d'utilisation

// Ajouter des produits au panier
ajouterProduitAuPanier(1, 'Produit 1', 10.99);
ajouterProduitAuPanier(2, 'Produit 2', 5.99);
ajouterProduitAuPanier(3, 'Produit 3', 8.99);

// Afficher le contenu du panier
afficherPanier();
?>
