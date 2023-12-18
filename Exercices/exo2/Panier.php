<?php
class Panier {
    protected $contenu = [];

    // Ajouter un fruit au panier
    public function ajouterFruit(Fruit $fruit) {
        $this->contenu[] = $fruit;
    }

    // Afficher le contenu du panier
    public function afficherContenu() {
        echo "Contenu du panier: </br>";
        foreach ($this->contenu as $fruit) {
            echo $fruit . "</br>";
        }
    }
}

?>