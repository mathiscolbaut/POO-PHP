<?php class Fruit {
    protected $nom;
    protected $poids;
    protected $prix;
    protected $image;

    // Constantes de classe pour les noms de fruits
    const POMME = "Pomme";
    const CERISE = "Cerise";

    // Constructeur
    public function __construct($nom, $poids, $prix, $image) {
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $prix;
        $this->image = $image;
    }

    // Méthode magique pour l'affichage
    public function __toString() {
        return "Nom: {$this->nom}, Poids: {$this->poids} g, Prix: {$this->prix} euros, Image: {$this->image}";
    }
}
?>