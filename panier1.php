<?php
require ('connect1.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "locabikedb1";

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
        <th>Heures</th>
        <th>ID</th>
    </tr>
<?php
$prix = 0;
$heures = 0;

if($prix == 0 && filter_input(INPUT_POST, 'prix1') !== NULL) {
    $prix = filter_input(INPUT_POST, 'prix1');
    $nom = "Vélo Électrique";
    $locationImage = "./loca1.jpeg";
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
        $nom = "Vélo Ville";
        $locationImage = "loca2.jpg";
        if($prix == "prixVeloVille1h"){
            $heures = 1;
            $prix = 5;
        }
        elseif($prix == "prixVeloVille2h"){
            $heures = 2;
            $prix = 8;
        }
        elseif($prix == "prixVeloVille5h"){
            $heures = 5;
            $prix = 10;
        }
        elseif($prix == "prixVeloVille24h"){
            $heures = 24;
            $prix = 15;
        }
    }
        elseif($prix == 0 && filter_input(INPUT_POST, 'prix3') !== NULL){
            $prix = filter_input(INPUT_POST, 'prix3');
            $nom = "VTT Adulte";
            $locationImage = "loca3.jpg";
            if($prix == "prixVTTAdulte1h"){
                $heures = 1;
                $prix = 6;
            }
            elseif($prix == "prixVTTAdulte2h"){
                $heures = 2;
                $prix = 9;
            }
            elseif($prix == "prixVTTAdulte5h"){
                $heures = 5;
                $prix = 12;
            }
            elseif($prix == "prixVeloAdulte24h"){
                $heures = 24;
                $prix = 18;
            }
        }
            elseif($prix == 0 && filter_input(INPUT_POST, 'prix4') !== NULL){
                $prix = filter_input(INPUT_POST, 'prix4');
                $nom = "VTT Enfant";
                $locationImage = "loca4.jpg";
                if($prix == "prixVTTEnfant1h"){
                    $heures = 1;
                    $prix = 5;
                }
                elseif($prix == "prixVTTEnfant2h"){
                    $heures = 2;
                    $prix = 8;
                }
                elseif($prix == "prixVTTEnfant5h"){
                    $heures = 5;
                    $prix = 10;
                }
                elseif($prix == "prixVTTEnfant24h"){
                    $heures = 24;
                    $prix = 15;
                }
            }
                elseif($prix == 0 && filter_input(INPUT_POST, 'prix5') !== NULL){
                    $prix = filter_input(INPUT_POST, 'prix5');
                    $nom = "Remorque Enfant";
                    $locationImage = "loca5.jpg";
                    if($prix == "prixRemorqueEnfant1h"){
                        $heures = 1;
                        $prix = 5;
                    }
                    elseif($prix == "prixRemorqueEnfant2h"){
                        $heures = 2;
                        $prix = 8;
                    }
                    elseif($prix == "prixRemorqueEnfant5h"){
                        $heures = 5;
                        $prix = 10;
                    }
                    elseif($prix == "prixRemorqueEnfant24h"){
                        $heures = 24;
                        $prix = 15;
                    }
                }
                    elseif($prix == 0 && filter_input(INPUT_POST, 'prix6') !== NULL){
                        $prix = filter_input(INPUT_POST, 'prix6');
                        $nom = "Siège Enfant";
                        $locationImage = "loca6.jpg";
                        if($prix == "prixSiegeEnfant1h"){
                            $heures = 1;
                            $prix = 4;
                        }
                        elseif($prix == "prixSiegeEnfant2h"){
                            $heures = 2;
                            $prix = 7;
                        }
                        elseif($prix == "prixSiegeEnfant5h"){
                            $heures = 5;
                            $prix = 9;
                        }
                        elseif($prix == "prixSiegeEnfant24h"){
                            $heures = 24;
                            $prix = 14;
                        }
            }
            $sql="INSERT INTO panier (nom, prix, heures, locationImage)
            VALUES ('$nom', $prix, $heures, '$locationImage')";
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
            echo $ids;
if(empty($ids)){
    $prods = array();
    echo "ids is empty";
}else{
    $sql = "SELECT * FROM panier";
    $result = $conn->query($sql);
    $prods = $result->fetch_assoc();
    foreach($prods as $wtf){
        echo $wtf;
        ?>
        <img src="toutvabien.gif">
        <?php
    }
    var_dump($prods);
    ?>
    <img src="toutvabien.gif">
    <?php
    while($prodss = $result->fetch_assoc()){
        ?>
            <tr>
            <td><img src="<?= $prodss['locationImage'] ?>" height="200px" width="300px"></td>
            <td><?= $prodss['nom'] ?></td>
            <td><?= $prodss['prix'] ?>€</td>
            <td><?= $prodss['heures'] ?> heure(s)</td>
            <td><?= $prodss['id'] ?></td>
            </tr>
            
            <?php
            }
    }
            ?>
        </table>
        <a href="./acceuil1.php">Retourner Au catalogue</a>
<?php
require_once ("close1.php");
?>