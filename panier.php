<?php require ('config.php');?>

<?php include 'header-client.php'; ?>

<div class="parent11">
<div class="btn"></div>
<div class="retour"><a class="btn1" href="acceuil-clients.php">Retourner Aux Locations</a></div>
</div>



<table>
    <tr>
        <th>Image</th>
        <th>Produit</th>
        <th>Prix</th>
        <th>Heures</th>
    </tr>
<?php
$prix = 0;
$heures = 0;

if($prix == 0 && filter_input(INPUT_POST, 'prix1') !== NULL) {
    $prix = filter_input(INPUT_POST, 'prix1');
    $nom = "Vélo Électrique";
    $locationImage = "image/loca1.jpeg";
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
}}

elseif($prix == 0 && filter_input(INPUT_POST, 'prix2') !== NULL){
    $prix = filter_input(INPUT_POST, 'prix2');
    $nom = "Vélo Ville";
    $locationImage = "image/loca2.jpg";

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
}}

elseif($prix == 0 && filter_input(INPUT_POST, 'prix3') !== NULL){
    $prix = filter_input(INPUT_POST, 'prix3');
    $nom = "VTT Adulte";
    $locationImage = "image/loca3.jpg";

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
}}

elseif($prix == 0 && filter_input(INPUT_POST, 'prix4') !== NULL){
    $prix = filter_input(INPUT_POST, 'prix4');
    $nom = "VTT Enfant";
    $locationImage = "image/loca4.jpg";

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
}}

elseif($prix == 0 && filter_input(INPUT_POST, 'prix5') !== NULL){
    $prix = filter_input(INPUT_POST, 'prix5');
    $nom = "Remorque Enfant";
    $locationImage = "image/loca5.jpg";

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
}}

elseif($prix == 0 && filter_input(INPUT_POST, 'prix6') !== NULL){
    $prix = filter_input(INPUT_POST, 'prix6');
    $nom = "Siège Enfant";
    $locationImage = "image/loca6.jpg";

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
}}

$sql="INSERT INTO panier (nom, prix, heures, locationImage)
VALUES ('$nom', $prix, $heures, '$locationImage')";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$result = $sql="SELECT * FROM panier";
$result = $conn->query($sql);
$idsAll = $result->fetch_assoc();
$ids = $idsAll['id'];
//echo $ids;

if(empty($ids)){
    $prods = array();
    echo "ids is empty";

}

else {
    $sql = "SELECT * FROM panier";
    $result = $conn->query($sql);
    $prods = $result->fetch_assoc();
    //foreach($prods as $wtf){
       // echo $wtf;
?>
        
<?php while($prodss = $result->fetch_assoc()){ ?>

    <tr>
        <td><img src="<?= $prodss['locationImage'] ?>" height="200px" width="300px"></td>
        <td><?= $prodss['nom'] ?></td>
        <td><?= $prodss['prix'] ?>€</td>
        <td><?= $prodss['heures'] ?> heure(s)</td>  
    </tr>

<?php }} ?>

</table>

<?php $conn->close(); ?>

<?php include 'footer.php'; ?>

<style>

.parent11 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.bnt { grid-area: 1 / 1 / 2 / 6; }
.retour { grid-area: 1 / 3 / 2 / 4; }

.retour {
    display: flex;
    justify-content: center;
    align-items: center;
}

.btn1 {
    border: solid 2px white;
    border-radius: 30px;
    padding: 10px;
    margin: 10px;
    background: rgb(36,101,4);
    background: linear-gradient(180deg, rgba(36,101,4,1) 0%, rgba(95,226,58,1) 50%, rgba(0,255,72,1) 100%);
    color: #fff;
    font-size: 1em;
    cursor: pointer;       
}

th {
    background: rgb(36,101,4);
    background: linear-gradient(180deg, rgba(36,101,4,1) 0%, rgba(95,226,58,1) 50%, rgba(0,255,72,1) 100%); 
}

td {
    background-color: white;
    height: 50px;
    width: 500px;
    color: blue;
    text-decoration: none;
    font-weight: bolder;
}

tr {
   background-color: black;
}



table {
    background-color: black;
}

</style>
