<?php
include_once ('autoload.php');

class UserDetails extends User {

    public function __construct($fistname, $lastname)
    {
       parent::__construct($fistname, $lastname);
    }

    public function getFullName()
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function present()
    {
        return "{$this->firstName} {$this->lastName} was added on {$this->getDate()}";
    }
}