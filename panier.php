<?php
require ('connect.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "locabikedb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
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
    $nom = "Vélo Électrique";
    if($prix == "prixVeloElectrique1h"){
        $heures = 1;
        $prix = 15;
    }
    elseif($prix == "prixVeloElectrique2h"){
        $heures = 2;
        $prix = 20;
    }
    elseif($prix == "prixVeloElectrique5h"){
        $heures = 5;
        $prix = 25;
    }
    elseif($prix == "prixVeloElectrique24h"){
        $heures = 24;
        $prix = 35;
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

            $sql="INSERT INTO panier (nom, prix, heures)
            VALUES ('$nom', '$prix', '$heures')";
            $result = $conn->query($sql);
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
            $result = $sql="SELECT * FROM panier";
            $result = $conn->query($sql);
            $idsAll = $result->fetch_assoc();
            $ids = $idsAll['id'];
if(empty($ids)){
    $prods = array();
}else{
    $result = $sql="SELECT * FROM panier WHERE id IN ('.implode(',', $ids).')";
    $result = $conn->query($sql);
    $prods = $result->fetch_assoc();
}
foreach ($prods as $prodss):
?>
    <tr>
    <td><img src="./<?= $prodss->locationImage; ?>" alt=""></td>
    <td><?= $prodss->nom ?></td>
    <td><?= $prodss->prix ?>€</td>
    <td><?= $prods['panier'][$prodss->id]?></td>
    <td><a href="/panier/panier.php?delPanier=<?= $prodss->id; ?>">Supprimer le produit</a></td>
    </tr>
    
    <?php
    endforeach;
    ?>
</table>
<a href="./acceuil-clients.php">Retourner Au catalogue</a>
