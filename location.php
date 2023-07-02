<?php include 'header-client.php';

require_once('connect.php');

$sql = 'SELECT * FROM `location`';

//je prepare la requete 

$query = $db->prepare($sql);

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);


require_once('close.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loc'A Bike</title>
</head>
<body>

<div class="parent2">
    <div class="titre"> <h1>Bienvenue chez Loc'A Bike</h1> <br/> <h2>Pour 1h ou pour plusieurs jours, on a le vélo qu'il vous faut</h2> </div>   
</div>

<div class="parent3">
<div class="container">
/*test query de la table entière, pas sur comment ajouter des liens dans recursion*/
<?php
  foreach($result as $location) {
  ?>
  <h2><b><?= $location['locationType']?></b></h2>
  <select name="prix" id="prix">
  <option value="prix1h">1 heure: <?= $location['prix1h'] ?> €</option>
  <option value="prix2h">2 heures: <?= $location['prix2h'] ?> €</option>
  <option value="prix5h">5 heures: <?= $location['prix5h'] ?> €</option>
  <option value="prix24h">24 heures: <?= $location['prix24h'] ?> €</option>
  <h3><?= $location['locationDescription'] ?></h3>
  <?php
  }
  ?>
/*test query d'une colonne, pas sur comment ajouter des liens dans recursion*/
  <?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost","root","","locabikedb");

$query = "SELECT locationType FROM location ORDER BY id DESC LIMIT 4";

$result = $mysqli->query($query);
?>
<div class="locationType">
<h2>
<?php
/* fetch a single value from the second column */
while ($locationType = $result->fetch_column(0)) {
    printf("%s\n", $locationType);
}
?>
</h2>
</div>
  </div>
</div>

</body>
</html>

<style>

@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.parent2 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.titre { grid-area: 1 / 1 / 2 / 6; }

.titre h1 {
    font-size: 100px;
    font-family: 'Roboto', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
}

.titre h2 {
    font-size: 30px;
    font-family: 'Roboto', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
}

.parent3 {
display: grid;
grid-template-columns: repeat(6, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.container { grid-area: 1 / 3 / 2 / 5; }

.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
/* ce style ne fait rien? Comment styliser par recursion?*/
.parent3 .container .locationType {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

</style>