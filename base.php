
<?php

// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=locabikedb;charset=utf8';
$username = '';
$password = 'root';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $bdd = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

// Création de la table "produits"
$bdd->exec("CREATE TABLE `location` (
                    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    locationType VARCHAR(255) NOT NULL,
                    prix1h DECIMAL(10,2) NOT NULL,
                    prix2h DECIMAL(10,2) NOT NULL,
                    prix5h DECIMAL(10,2) NOT NULL,
                    prix24h DECIMAL(10,2) NOT NULL,
                    locationDescription VARCHAR(255) NOT NULL)");

// Insertion de données dans la table "produits"
$bdd->exec("INSERT INTO `location` (locationType, prix1h, prix2h, prix5h, prix24h, locationDescription)
                    VALUES (0, 'Vélo Adulte', 6, 9, 12, 18, 'Panier, antivol et porte bébé inclus'),
	                       (1, 'Vélo Enfant', 5, 8, 10, 15, 'Vélo 20″ ou 24″, antivol et casque inclus'),
	                       (2, 'Vélo Remorque Enfant', 5, 8, 10, 15, 'Remorque pouvant contenir 2 enfants'),
	                       (3, 'Vélo Électrique', 15, 20, 25, 35, 'Panier et antivol inclus')");


/* Récupération des données de la table location */


/* Fermeture de la connexion à la base de données*/
$req->closeCursor();

$bdd = null

?>