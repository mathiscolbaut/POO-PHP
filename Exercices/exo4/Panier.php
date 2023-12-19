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
    public function ajouterFruits($type, $nombre) {
        for ($i = 0; $i < $nombre; $i++) {
            if ($type === Fruit::POMME) {
                $fruit = new Fruit(Fruit::POMME, rand(100, 200), 1.5, "pomme.jpg");
            } elseif ($type === Fruit::CERISE) {
                $fruit = new Fruit(Fruit::CERISE, rand(20, 50), 2.0, "cerise.jpg");
            }
            $this->ajouterFruit($fruit);
        }
    }
}

?>