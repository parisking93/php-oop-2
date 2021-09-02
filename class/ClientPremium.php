<?php
require_once __DIR__ . "/Client.php";
class ClientPremium extends Client {
    protected $premiumCode;
    protected $discount;

    function __construct($_username,$_password,$_numberCard, $_dateOfExpire, $_vpn) {
        parent::__construct($_username,$_password);
        $this->numberCard = $_numberCard;
        $this->dateOfExpire = $_dateOfExpire;
        $this->vpn = $_vpn;
        $this->setPremiumCode();

    }

    private function setPremiumCode(){
        for($i = 0; $i < 7; $i++) {
            $this->premiumCode .= rand(1,9);
        };
        $this->discount = 10;
    } 

    public function getPremiumCode() {
        return $this->premiumCode;
    }

}