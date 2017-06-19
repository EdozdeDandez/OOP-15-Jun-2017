<?php

class Student implements UserInterface{
    use AddPerson;

    protected $firstName;
    protected $lastName;
    private $date;
    public $arr = array();

    public function __construct($fistname, $lastname)
    {
        $this->firstName = $fistname;
        $this->lastName = $lastname;
    }

    public function setDate()
    {
        $this->date = date("Y-m-d");
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getDate()
    {
        return $this->date;
    }
}
