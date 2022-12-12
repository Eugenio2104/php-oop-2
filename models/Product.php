<?php

class Product
{
  public $category;
  public $brand;
  public $price;
  public $isAvaiable = true;
  public $image;



  public function __construct(Category $_category, $_brand, $_price, $_isAvaiable, $_image)
  {
    $this->category = $_category;
    $this->brand = $_brand;
    $this->price = $_price;
    $this->isAvaiable = $_isAvaiable;
    $this->image = $_image;
  }
}
