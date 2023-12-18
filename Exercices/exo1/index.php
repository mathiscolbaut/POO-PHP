<?php
include_once("Fruit.php");
include_once("Pomme.php");
include_once("Cerise.php");


// Création d'une liste de fruits
$fruits = [
    new Pomme(150, 1.5, '/img/pommeverte.jpg'),
    new Pomme(120, 1.2, '/img/pommerouge.jpg'),
    new Cerise(50, 2.0, '/img/cerisedouble.jpg'),
    new Cerise(40, 1.8, '/img/cerisetriple.jpg')

];

// Affichage de la liste de fruits
foreach ($fruits as $fruit) {
    echo $fruit;  // plus explicitement :  echo $fruit->__toString();
    echo "</br>";
}
?>