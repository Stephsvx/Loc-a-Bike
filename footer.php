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
    <div class="reseaux"> </div>
    <div class="horaire"> </div>
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
    height: 200px;
    background: rgb(0,255,72);
    background: linear-gradient(90deg, rgba(0,255,72,1) 0%, rgba(95,226,58,1) 50%, rgba(36,101,4,1) 100%);
}

</style>