<?php

trait Card {
    private $numberCard;
    private $dateOfExpire;
    private $vpn;

    public function setCard($_numberCard, $_dateOfExpire, $_vpn) {
        $this->numberCard = $_numberCard;
        $this->dateOfExpire = $_dateOfExpire;
        $this->vpn = $_vpn;

    }
    public function getCard() {
        return $this->numberCard;
    }
}