<?php

class Staff implements UserInterface{
    use AddPerson;

    protected $firstName;
    protected $lastName;
    protected $staffNumber;
    private $date;
    private $count = 0;
    public $arr = array();

    public function __construct($fistname, $lastname)
    {
        $this->firstName = $fistname;
        $this->lastName = $lastname;
    }
    public function setNumber()
    {
        $this->staffNumber = $this->count++;
        $this->count = $this->count++;
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
    public function getNumber()
    {
        return $this->count;
    }
}