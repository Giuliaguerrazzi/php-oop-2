<?php

include_once __DIR__ . '/abbigliamento.php';

class Details extends Abbigliamento {
   public $material;
   public $color;
   private $product_code;

    public function __construct($material, $color, $product_code) {
        $this->material = $material;
        $this->color = $color;
        $this->product_code = $product_code;
    }
}