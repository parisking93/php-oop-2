<?php
require_once __DIR__ . "/../CardTrait.php";



class Client {
    protected $username;
    protected $password;
    protected $email;
    protected $products= [];

    use Card;

    function __construct($_username,$_password) {
        $this->username = $_username;
        $this->password = $_password;
    }

    public function addProduct($_product) {
        $this->products[] = $_product;
    }

    public function showProduct() {
        return $this->products;
    }

}