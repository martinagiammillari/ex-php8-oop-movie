<?php
// 1. DEFINISCO TRAIT----------------------------------------------------------
trait Discountable
{
    public $price;
    public $discount;

    // Metodo
    public function getDiscountedPrice()
    {
        return $this->price - $this->discount;
    }
}
//----------------------------------------------------------------------------------
