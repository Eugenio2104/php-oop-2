<?php

class Accessory extends Product
{
  public $isWaterproof = true;


  public function __construct(Category $_category, $_name, $_brand, $_price, $_isAvaiable, $_image, $_isWaterproof)
  {
    parent::__construct($_category, $_name, $_brand, $_price, $_isAvaiable, $_image);

    $this->isWaterproof = $_isWaterproof;
  }
}
