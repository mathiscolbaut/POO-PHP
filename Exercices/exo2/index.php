<?php
include_once("Panier.php");

include_once("Fruit.php");


// Création d'instances de pommes et de cerises
$pomme1 = new Fruit(Fruit::POMME,150, 1.5, "pomme.jpg");
$pomme2 = new Fruit(Fruit::POMME,200, 2.0, "pomme2.jpg");
$cerise1 = new Fruit(Fruit::CERISE,50, 2.0, "cerise.jpg");
$cerise2 = new Fruit(Fruit::CERISE,30, 2.5, "cerise2.jpg");

// Création de deux paniers
$panier1 = new Panier();
$panier2 = new Panier();

// Ajout de fruits aux paniers
$panier1->ajouterFruit($pomme1);
$panier1->ajouterFruit($cerise1);

$panier2->ajouterFruit($pomme2);
$panier2->ajouterFruit($cerise2);


// Affichage du contenu des paniers
$panier1->afficherContenu();
echo "</br>";
$panier2->afficherContenu();

?>