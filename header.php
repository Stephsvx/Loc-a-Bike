

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
    <div class="logo"><img src="image/logo.png" alt="logo du site" height="200px" width="200px"> </div>
    <div class="boutons"> 
          
        <button class="compte">
            <i class="fas fa-user"></i>
            Compte
        </button>

        <button class="panier">
            <i class="fas fa-shopping-cart"></i>
            Panier
        </button>

        <button class="deconnexion">
            <i class="fa-solid fa-power-off"></i>
              Deconnexion

        </button>

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

.parent {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.header { grid-area: 1 / 1 / 2 / 6; }
.logo { grid-area: 1 / 3 / 2 / 4; }
.boutons { grid-area: 1 / 5 / 2 / 6; }

.header {
    display: flex;
    height: 200px;
    background: rgb(36,101,4);
    background: linear-gradient(90deg, rgba(36,101,4,1) 0%, rgba(95,226,58,1) 50%, rgba(0,255,72,1) 100%); 
}

.logo {
    display: flex;
    justify-content: center;
    align-items: center;
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