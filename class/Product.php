<?php
class Product {
    protected $name;
    public $description;
    protected $price;
    public $img;
    public $numberOfProduct;


    function __construct($_name,$_price,$_numberOfProduct) {
        $this->name = $_name;
        $this->price = $_price;
        $this->numberOfProduct =$_numberOfProduct;
    }

    public function setDetails($_description,$_img) {
        $this->description = $_description;
        $this->img = $_img;
        
    }
    public function getProduct() {
        if($this->numberOfProduct>0) {
            $this->numberOfProduct -= 1;
            return [$this->name,$this->price,$this->img,$this->description];
        }
    }
    public function getItemLeft() {
        return $this->numberOfProduct;
    }

}