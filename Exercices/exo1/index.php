<?php
include_once("Fruit.php");


// Création d'une liste de fruits
$fruits = [
    new Fruit(Fruit::POMME,150, 1.5, '/img/pommeverte.jpg'),
    new Fruit(Fruit::POMME,120, 1.2, '/img/pommerouge.jpg'),
    new Fruit(Fruit::CERISE,50, 2.0, '/img/cerisedouble.jpg'),
    new Fruit(Fruit::CERISE,40, 1.8, '/img/cerisetriple.jpg')

];

// Affichage de la liste de fruits
foreach ($fruits as $fruit) {
    echo $fruit;  // plus explicitement :  echo $fruit->__toString();
    echo "</br>";
}
?>