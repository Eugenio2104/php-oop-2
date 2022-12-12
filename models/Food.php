<?php
class Food extends Product
{

  public $ingredients;
  public $kg;
  public $age;



  public function __construct(Category $_category, $_brand, $_price, $_isAvaiable, $_image, $_ingredients, $_kg, $_age)
  {
    parent::__construct($_category, $_brand, $_price, $_isAvaiable, $_image);

    $this->ingredients = $_ingredients;
    $this->kg = $_kg;
    $this->age = $_age;
  }
}
