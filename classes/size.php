<?php

include_once __DIR__ . '/abbigliamento.php';

class Size extends Abbigliamento {
    public $size;

    public function __construct($name, $category, $price, $size) {
        parent::__construct($name, $category, $price);

        $this->size = $size;
    }
}