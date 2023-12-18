<?php
class Pomme extends Fruit
{
    public function __construct($poids, $prix, $image)
    {
        parent::__construct('Pomme', $poids, $prix, $image);
    }
}
?>