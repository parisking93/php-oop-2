<?php
require_once __DIR__ . "/Client.php";
class ClientPremium extends Client {
    protected $premiumCode;
    protected $discount;


    function __construct($_username,$_password,$_numberCard, $_dateOfExpire, $_vpn) {
        parent::__construct($_username,$_password);
        $this->setCard($_numberCard, $_dateOfExpire, $_vpn);
        $this->setPremiumCode();

    }
    // assegno il codice premium al nuovo cliente con il discount
    private function setPremiumCode(){
        for($i = 0; $i < 7; $i++) {
            $this->premiumCode .= rand(1,9);
        };
        $this->discount = 10;
    } 

    public function getPremiumCode() {
        return $this->premiumCode;
    }

    public function addProduct($_product) {
        $_product[1] *= 0.9;
        $this->products[] = $_product;
    }

}