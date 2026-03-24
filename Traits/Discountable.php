<?php
// 1. DEFINISCO TRAIT----------------------------------------------------------
trait Discountable
{

//DEFINISCO GLI ATTRIBUTI
    public $price;
    public $discount;

    // Metodo
    public function getDiscountedPrice()
    {
        return $this->price - $this->discount;
    }
}
//----------------------------------------------------------------------------------
