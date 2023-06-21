<?php include 'header.php'; ?>

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

.slider { grid-area: 1 / 1 / 2 / 7; }
.container { grid-area: 1 / 3 / 2 / 5; }

.container {
    display: flex;
    justify-content: center;
    align-items: center;
}

</style>