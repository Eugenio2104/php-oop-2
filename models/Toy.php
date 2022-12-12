<?php

class Toy extends Product
{
  public $dimension;
  public $color;
  public $materials;

  public function __construct(Category $_category, $_name, $_brand, $_price, $_isAvaiable, $_image, $_dimension, $_color, $_materials)
  {
    parent::__construct($_category, $_name, $_brand, $_price, $_isAvaiable, $_image);

    $this->dimension = $_dimension;
    $this->color = $_color;
    $this->materials = $_materials;
  }
}
