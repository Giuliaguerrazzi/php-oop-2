<?php 

class Abbigliamento {
    // proprietà
    public $name;
    public $category;
    public $price;

    // costruttore
    public function __construct($name, $category, $price) {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }

    // metodi
    public function setDiscount($category) {
           $sconto = $this->price - ($this->price * 30 / 100);

            return number_format($sconto, 2);
    }

}