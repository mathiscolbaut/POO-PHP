<?php

class Phone
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getDollardFromEuroToCurrency($coefficient, $currentSymbol = "$"){
        return $this->price * $coefficient.$currentSymbol;
    }
}

$phone = new Phone("iPhone", 500000);
print $phone->name.PHP_EOL;
print $phone->price.PHP_EOL;
