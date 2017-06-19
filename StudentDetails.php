<?php
class StudentDetails extends Student {

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
        return "The student {$this->firstName} {$this->lastName} joined on {$this->getDate()}";
    }
}