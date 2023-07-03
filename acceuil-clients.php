<?php include 'header-client.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loc'A Bike</title>
</head>
<body>

<div class="parent2">
        <div class="logo"><img src="image/logo.png" alt="logo du site" height="200px" width="200px"> </div> 
        <div class="titre" ><h2>Pour 1h ou pour plusieurs jours, on a le vélo qu'il vous faut</h2> </div>
    </div>

<div class="parent3">
<div class="slider"> </div>
<div class="container">
    <img name="image" width="1280px" height="782px">
    <script>
     var image = [];
        image[0] = "image/image1.jpg";
        image[1] = "image/image2.webp";
        image[2] = "image/image3.jpg";
        image[3] = "image/image4.jpg";
        image[4] = "image/image2.jpg";
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
<div class="categorie"><h3>Choississez le vélo et le temps qui vous convient</h3> </div>
</div>

<div class="parent5">
  <div class="produits1"> 
    <div class="card"> 

        <div class="card1"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <h3>Vélo éléctrique</h3>
                <div class="produits">
                    <img src="image/img1.jpeg" width="300px" height="200pw" alt="">   
                </div>
                <div class="menu">
                  <div class="filtre">
                      <select id="filtre-temps">
                        <option value="1">1h-15€</option>  <!-- L'élément <option> est utilisé dans les balises <select> pour créer une liste déroulante avec différentes options all" tous " -->
                        <option value="2">2h-20€</option>
                        <option value="5">5h-25€</option>
                        <option value="24">24h-35€</option>
                      </select>
                  </div>
                  </div>
                <button class="b1">Ajoutez au panier</button>
              </div>
            </div>
          </div>
          <div class="card2"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <h3>Vélo de ville</h3>
                <div class="produits">
                    <img src="image/img2.jpg" width="300px" height="200pw" alt="">
                </div>
                <div class="menu">
                  <div class="filtre">
                      <select id="filtre-temps">
                        <option value="1">1h-6€</option>  
                        <option value="2">2h-9€</option>
                        <option value="5">5h-12€</option>
                        <option value="24">24h-18€</option>
                      </select>
                  </div>
                </div>
                <button class="b1">Ajoutez au panier</button>
              </div>
            </div>
          </div>
          </div>
          <div class="card3"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <h3>VTT adulte</h3>
                <div class="produits">
                    <img src="image/img3.jpg" width="300px" height="200pw" alt="">
                </div>
                <div class="menu">
                  <div class="filtre">
                      <select id="filtre-temps">
                        <option value="1">1h-6€</option>  <
                        <option value="2">2h-9€</option>
                        <option value="5">5h-12€</option>
                        <option value="24">24h-18€</option>
                      </select>
                  </div>
                </div>
                <button class="b1">Ajoutez au panier</button>
              </div>
            </div>
          </div>
    </div>
  </div>
</div>

<div class="parent7">
    <div class="produits2"> 
    <div class="cards"> 

        <div class="card4"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <h3>VTT enfant</h3>
                <div class="produits">
                    <img src="image/img4.jpg" width="300px" height="200pw" alt="">
                </div>
                <div class="menu">
                  <div class="filtre">
                      <select id="filtre-temps">
                        <option value="1">1h-5€</option>  
                        <option value="2">2h-8€</option>
                        <option value="5">5h-10€</option>
                        <option value="24">24h-15€</option>
                      </select>
                  </div>
                </div>
                <button class="b1">Ajoutez au panier</button>
              </div>
            </div>
          </div>
          <div class="card5"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <h3>Remorque enfant</h3>
                <div class="produits">
                    <img src="image/img5.jpg" width="300px" height="200pw" alt="">
                </div>
                <div class="menu">
                  <div class="filtre">
                      <select id="filtre-temps">
                        <option value="1">1h-5€</option>  
                        <option value="2">2h-8€</option>
                        <option value="5">5h-10€</option>
                        <option value="24">24h-15€</option>
                      </select>
                  </div>
                  </div>
                <button class="b1">Ajoutez au panier</button>
              </div>
            </div>
          </div>
          <div class="card6"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <h3>Siège enfant</h3>
                <div class="produits">
                    <img src="image/img6.jpg" width="300px" height="200pw" alt="">
                </div>
                <div class="menu">
                  <div class="filtre">
                      <select id="filtre-temps">
                        <option value="1">1h-5€</option>  
                        <option value="5">5h-10€</option>
                        <option value="24">24h-15€</option>
                      </select>
                  </div>
                </div>
                <button class="b1">Ajoutez au panier</button>
              </div>
            </div>
          </div>
    </div>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>

<style>

@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
/*titre*/
.parent2 {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-template-rows: repeat(2, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 0px;
}
    
.logo { grid-area: 1 / 3 / 2 / 4; }
.titre { grid-area: 2 / 1 / 3 / 6; }

.logo {
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
/*fin titre*/

/*slider*/
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
/*fin slider*/

/*categorie*/
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
/*fin categorie*/

/*card*/
.parent5 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.produits1 { grid-area: 1 / 1 / 2 / 6; }
.card { grid-area: 1 / 2 / 2 / 6;}

.b1{
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

.produits1 {
    display: flex;
    justify-content: center;
}

.card { 
    display: flex;
    justify-content: space-around;
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

.parent7 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.produits2 { grid-area: 1 / 1 / 2 / 6; }
.cards { grid-area: 1 / 2 / 2 / 6;}

.produits2 {
    display: flex;
    justify-content: center;
}

.cards { 
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.card4{
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

.card5 {
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

.card6 {
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
/*fin card*/
</style>