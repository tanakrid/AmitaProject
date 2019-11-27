<?php
class InfoProduct{

    public $name;
    public $detail;
    public $price;
    public $putOnSale;
    public $amountSold;
    public $income;
    public $price;

    function __construct($name, $detail, $price
                        , $putOnSale, $amountSold, $price){
        $this->name = $name;
        $this->detail = $detail;
        $this->price = $price;
        $this->putOnSale = $putOnSale;
        $this->amountSold = $amountSold;
        $this->income = $amountSold*$price;
    }
    
    
}
?>