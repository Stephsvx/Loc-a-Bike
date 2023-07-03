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
          
        <button class="connexion">
            <a href="connexion.php"> <i class="fas fa-user"></i>
            Connexion / inscription </a>
        </button>
    </div>
</div>

</body>

<script>
     // Récupérer les références des boutons
  var compteButton = document.querySelector('.compte');
  
  // Ajouter un gestionnaire d'événements de clic au bouton "Compte"
  compteButton.addEventListener('click', function() {
    window.location.href = 'connexion.php';
  });
 
</script>
</html>

<style>

@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
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
    background-image: url(image2/fond2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}

.boutons {
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}

.connexion {
  border: none;
  background: none;
  cursor: pointer;
  padding: 5px;
  color: white;
  font-size: 15px;
  font-family: 'Roboto', sans-serif;
}

.connexion i {
    font-size: 40px;
    color: white;
}

.connexion a {
    color: white;
}
</style>