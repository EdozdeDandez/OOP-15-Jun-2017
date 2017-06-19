<?php
namespace app\admin;
class Admin {
    protected $firstname;
    protected $lastname;
    const firstname = 'Edith';
    const lastname = 'Dande';
    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    static function getFullName(){
        return self::firstname." ".self::lastname;
    }
    static function login(){
        return "Last login: ".date('Y-m-d');;
    }
}