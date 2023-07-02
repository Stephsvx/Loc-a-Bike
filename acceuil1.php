<?php
require_once('connect1.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "locabikedb1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
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

<div class="parent2">
    <div class="titre"> <h1>Bienvenue chez Loc'A Bike</h1> <br/> <h2>Pour 1h ou pour plusieurs jours, on a le vélo qu'il vous faut</h2> </div>   
</div>

<div class="parent3">
<div class="slider"> </div>
<div class="container">
    <img name="image" width="1613" height="780">
    <script>
     var image = [];
        image[0] = "image/image1.jpg";
        image[1] = "image/image2.webp";
        image[2] = "image/image3.jpg";
        image[3] = "image/image4.jpg";
        var i = 0;
        var timer = 3000;
       
        function changerimage() {
            document.image.src = image[i];
            if (i<image.length - 1) {
                i++;
            } 
            else {
                i=0;
            }
            setTimeout(changerimage, timer);
        }
        window.onload = changerimage;
    </script>
  </div>
</div>

<div class="parent4">
<div class="categorie"><h3>Choississez le vélo qu'il vous faut</h3> </div>
</div>

<div class="parent5">
    <div class="produits1"> </div>
    <div class="card"> 

        <div class="card1"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <img src="image/electrique.jpeg" width="300px" height="200pw" alt="">
                </div>
                <?php
                require_once('connect1.php');
                $sql= "SELECT * FROM locationvelo WHERE id=1";
                $locationvelo1 = $conn->query($sql);
                foreach($locationvelo1 as $prix1):
                ?>
                <form action="panier1.php" method="post">
                <select name="prix1" id="prix1">
                <option value="prixVeloElectrique1h">1 heure: <?= $prix1['prix1h'] ?> €</option>
                <option value="prixVeloElectrique2h">2 heures: <?= $prix1['prix2h'] ?> €</option>
                <option value="prixVeloElectrique5h">5 heures: <?= $prix1['prix5h'] ?> €</option>
                <option value="prixVeloElectrique24h">24 heures: <?= $prix1['prix24h'] ?> €</option>
                </select>
                </div>
                <button class="b1" input type="submit">
                Ajoutez au panier</button>
                </div>
                </form>
                <?php
                endforeach;
                require_once('close1.php');
                ?>
              </div>
            </div>
          </div>
          <div class="card2"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <img src="image/ville.jpg" width="300px" height="200pw" alt="">
                </div>
                <?php
                require_once('connect1.php');
                $sql= "SELECT * FROM locationvelo WHERE id=2";
                $locationvelo2 = $conn->query($sql);
                foreach($locationvelo2 as $prix2):
                ?>
                <form action="panier1.php" method="post">
                <select name="prix2" id="prix2">
                <option value="prixVeloVille1h">1 heure: <?= $prix2['prix1h'] ?> €</option>
                <option value="prixVeloVille2h">2 heures: <?= $prix2['prix2h'] ?> €</option>
                <option value="prixVeloVille5h">5 heures: <?= $prix2['prix5h'] ?> €</option>
                <option value="prixVeloVille24h">24 heures: <?= $prix2['prix24h'] ?> €</option>
                </select>
                </div>
                <button class="b1" input type="submit">
                Ajoutez au panier</button>
                </div>
                </form>
                <?php
                endforeach;
                require_once('close1.php');
                ?>
              </div>
            </div>
          </div>
          <div class="card3"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <img src="image/vtt.jpg" width="300px" height="200pw" alt="">
                </div>
              </div>
            </div>
          </div>
</div>

</body>
<?php include 'footer1.php'; ?>
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

.slider { grid-area: 1 / 1 / 2 / 7; }
.container { grid-area: 1 / 3 / 2 / 5; }

.container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.parent4 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.categorie { grid-area: 1 / 1 / 2 / 6; }

.categorie h3 {
    font-size: 30px;
    font-family: 'Roboto', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center; 
}

.parent5 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.produits1 { grid-area: 1 / 1 / 2 / 6; }
.card { grid-area: 1 / 2 / 2 / 6;}

.produits1 {
    display: flex;
    justify-content: center;
}

.card { 
    display: flex;
    justify-content: space-a;
    align-items: center;
}

.card1{
    max-width: 1100px;
    margin: 0 auto;
    text-align: center;
    padding: 30px;
    
  }
  
  .position{
    display: flex;
    align-items: center;
  }
  .conteneur{
    display: flex;
    flex-wrap: wrap;
    flex: 1;
    margin: 20px;
    padding: 20px;
    border: 2px solid rgb(8, 158, 227);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;
  }
  
  .conteneur > *{
    flex: 1 1 100%;
  }

.card2{
    max-width: 1100px;
    margin: 0 auto;
    text-align: center;
    padding: 30px;
    
  }
  
  .position{
    display: flex;
    align-items: center;
  }
  .conteneur{
    display: flex;
    flex-wrap: wrap;
    flex: 1;
    margin: 20px;
    padding: 20px;
    border: 2px solid green;
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;
  }
  
  .conteneur > *{
    flex: 1 1 100%;
  }

.card3{
    max-width: 1100px;
    margin: 0 auto;
    text-align: center;
    padding: 30px;
    
}
  
.position{
    display: flex;
    align-items: center;
}

.conteneur{
    display: flex;
    flex-wrap: wrap;
    flex: 1;
    margin: 20px;
    padding: 20px;
    border: 2px solid rgb(205, 227, 8);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;
}
  
.conteneur > *{
    flex: 1 1 100%;
}
</style>