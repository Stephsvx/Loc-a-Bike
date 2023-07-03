<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loc'A Bike</title>
</head>
<body>
<div class="parent6">
    <div class="footer"> </div>
    <div class="politique">Politique de confidetialitée</div>
    <div class="reseaux"> 
    <a href="https://www.facebook.com/" target="_blank"><img class="facebook" src="image2/facebook.png" alt="logo de facebook"></a>
    <a href="https://www.instagram.com/" target="_blank"><img class="instagram" src="image2/instagram.png" alt="logo d'instagram"></a>
    <a href="https://twitter.com/?lang=fr" target="_blank"><img class="twitter" src="image2/twitter.png" alt="logo de twitter"></a>
    </div>
    <div class="horaire">Lun : 14h-19h<br/>Mar à Sam<br/>9h-13h 14h-19h </div>
    <div class="coordonnees">Tel : 0302010405<br/>Mail : loc-a-bike@gmail.com</div>
    <div class="cookies">Cookies</div>
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

.parent6 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.footer { grid-area: 1 / 1 / 2 / 6; }
.politique { grid-area: 1 / 1 / 2 / 2; }
.reseaux { grid-area: 1 / 2 / 2 / 3; }
.horaire { grid-area: 1 / 3 / 2 / 4; }
.coordonnees { grid-area: 1 / 4 / 2 / 5; }
.cookies { grid-area: 1 / 5 / 2 / 6; }

.footer {
    display: flex;
    height: 300px;
    background-image: url(image2/fond.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
}

.politique {
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}

.reseaux {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.horaire {
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}

.coordonnees {
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}

.cookies {
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}
</style>