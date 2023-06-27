<?php
session_start();
$prenom = isset($_SESSION['prenom']) ? $_SESSION['prenom'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d2de6ecd94.js" crossorigin="anonymous"></script>
    <title>Loc'A Bike</title>
</head>
<body>
    
<div class="parent">
    <div class="header"> </div>
    <div class="boutons"> 
          
        <button class="compte">
            <i class="fas fa-user"></i>
            <?php echo $prenom; ?>
        </button>

        <button class="panier">
            <i class="fas fa-shopping-cart"></i>
            Panier
        </button>
    <?php 
    if (isset($_POST['deco'])) {
        session_unset();
        session_destroy();
        header("location: acceuil-connexion.php");
        exit();
    }
    ?>
    <form method="POST" action="">
        <button type="submit" name="deco" class="deconnexion">
            <i class="fa-solid fa-power-off"></i>
              Deconnexion
        </button>
    </form>

    </div>
</div>

</body>

<script>
     // Récupérer les références des boutons
  var compteButton = document.querySelector('.compte');
  var compteButton = document.querySelector('.panier');
  
  // Ajouter un gestionnaire d'événements de clic au bouton "Compte"
  compteButton.addEventListener('click', function() {
    window.location.href = 'connexion.php';
  });
  compteButton.addEventListener('click', function() {
    window.location.href = 'panier.php';
  });
 
</script>
</html>

<style>

@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.parent {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.header { grid-area: 1 / 1 / 2 / 6; }
.boutons { grid-area: 1 / 5 / 2 / 6; }

.header {
    display: flex;
    height: 300px;
    background-image: url(image/fond.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}

.boutons {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.compte {
  border: none;
  background: none;
  cursor: pointer;
  padding: 5px;
  color: white;
  font-size: 15px;
  font-family: 'Roboto', sans-serif;
}

.panier {
    border: none;
    background: none;
    cursor: pointer;
    padding: 5px;
    color: white;
    font-size: 15px;
    font-family: 'Roboto', sans-serif;
}

.deconnexion {
    border: none;
    background: none;
    cursor: pointer;
    padding: 5px;
    color: white;
    font-size: 15px;
    font-family: 'Roboto', sans-serif;
}

.panier i {
    font-size: 40px;
}

.compte i {
  font-size: 40px;
}

.deconnexion i {
    font-size: 40px;
}
</style>