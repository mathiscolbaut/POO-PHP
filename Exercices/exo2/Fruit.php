<?php
class Fruit
{
    protected $nom;
    protected $poids;
    protected $prix;
    protected $image;

    public function __construct($nom, $poids, $prix, $image)
    {
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $prix;
        $this->image = $image;
    }
    public function __toString()
    {
        return "Nom: {$this->nom}, Poids: {$this->poids} g, Prix: {$this->prix} euros, Image: {$this->image}\n";
    }
}

?>