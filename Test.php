<?php
include_once('autoload.php');
//include ('iTest.php');
//include ('addPerson.php');
class Test implements iTest{
    use addPerson;
    public $firstName;
    public $lastName;
    public $date;
    public $objects = array();
    public $arr = array();
    public function __construct()
    {
        echo "Hello from ".__CLASS__;
    }
    public function setData($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
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
    public function __destruct()
    {
        echo "Class ".__CLASS__." exiting";
    }
}
