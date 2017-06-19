<?php

class StaffDetails extends Staff {

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
        return "{$this->firstName} {$this->lastName} staff number: {$this->getNumber()} started working on {$this->getDate()}";
    }
}