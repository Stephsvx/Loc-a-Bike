<?php
<<<<<<< Updated upstream
require_once('connect.php');
session_start();

// Ajouter un produit au panier
function ajouterProduitAuPanier($idProduit, $nomProduit, $prixProduit) {
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }

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

// Supprimer un produit du panier
function supprimerProduitDuPanier($idProduit) {
    if (isset($_SESSION['panier'][$idProduit])) {
        unset($_SESSION['panier'][$idProduit]);
    }
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
=======
require ('connect.php');
require ('db.class.php');
require ('panier.class.php');
$DB = new DB();
$panier = new panier($DB);
?>
<style>
    td {
        background-color: white;
        height: 30vh;
        color: blue;
        text-decoration: none;
        font-weight: bolder;
    }
    a{
        text-decoration: none;
        color: yellow;
        background-color: black;
        
    }

    table{
        background-color: black;
        color: white;

    }
</style>


<table>
    <tr>
        <th>Image</th>
        <th>Produit</th>
        <th>Prix</th>
        <th>Quantité</th>
    </tr>

<?php
$prix = 0;
$heures = 0;
/*6 9 12 18
5 8 10 15
5 8 10 15
15 20 25 35 */

if($prix == 0 && filter_input(INPUT_POST, 'prix1') !== NULL) {
    $prix = filter_input(INPUT_POST, 'prix1');
    $nom = "Vélo Adulte";
    if($prix == 6){
        $heures = 1;
    }
    elseif($prix == 9){
        $heures = 2;
    }
    elseif($prix == 12){
        $heures = 5;
    }
    elseif($prix == 18){
        $heures = 24;
    }
}
    elseif($prix == 0 && filter_input(INPUT_POST, 'prix2') !== NULL){
        $prix = filter_input(INPUT_POST, 'prix2');
        $nom = "Vélo Enfant";
        if($prix == 5){
            $heures = 1;
        }
        elseif($prix == 8){
            $heures = 2;
        }
        elseif($prix == 10){
            $heures = 5;
        }
        elseif($prix == 15){
            $heures = 24;
        }
    }
        elseif($prix == 0 && filter_input(INPUT_POST, 'prix3') !== NULL){
            $prix = filter_input(INPUT_POST, 'prix3');
            $nom = "Remorque Enfant";
            if($prix == 5){
                $heures = 1;
            }
            elseif($prix == 8){
                $heures = 2;
            }
            elseif($prix == 10){
                $heures = 5;
            }
            elseif($prix == 15){
                $heures = 24;
            }
        }
            elseif($prix == 0 && filter_input(INPUT_POST, 'prix4') !== NULL){
                $prix = filter_input(INPUT_POST, 'prix4');
                $nom = "Vélo Électrique";
                if($prix == 15){
                    $heures = 1;
                }
                elseif($prix == 20){
                    $heures = 2;
                }
                elseif($prix == 25){
                    $heures = 5;
                }
                elseif($prix == 35){
                    $heures = 24;
                }
            }
            $sql = 'INSERT INTO `panier` (`nom`, `prix`, `heures`) VALUES (:nom, :prix, :heures);';
            $query = $db->prepare($sql);
            $query->bindValue(':prix', $prix, PDO::PARAM_INT);
            $query->bindValue(':heures', $heures, PDO::PARAM_INT);
            $query->bindValue(':nom', $nom, PDO::PARAM_STR);
            $query->execute();

$ids = array_keys($_SESSION['panier']);
if(empty($ids)){
    $prods = array();
}else{
    $prods = $DB->requete('SELECT * FROM panier WHERE id IN ('.implode(',', $ids).')');
}
foreach ($prods as $prodss):
?>
    <tr>
    <td><img src="/image/loca<?= $prodss->id; ?>.jpg" alt=""></td>
    <td><?= $prodss->nom ?></td>
    <td><?= $prodss->prix ?>€</td>
    <td><?= $_SESSION['panier'][$prodss->id]?></td>
    <td><a href="/panier/panier.php?delPanier=<?= $prodss->id; ?>">Supprimer le produit</a></td>
    </tr>
    
    <?php
    endforeach;
    ?>
</table>
<h1>Nombre de produits : <?= $panier->count() ?></h1>
<h1>Total : <?= number_format($panier->total(),2,',',' ') ?>€</h1>
<a href="./acceuil-clients.php">Retourner Au catalogue</a>
>>>>>>> Stashed changes
