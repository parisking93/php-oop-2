<?php
require_once __DIR__ . "/../CardTrait.php";


class Client {
    protected $username;
    protected $password;
    protected $email;

    use Card;

    function __construct($_username,$_password) {
        $this->username = $_username;
        $this->password = $_password;
    }

}