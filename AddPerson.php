<?php

trait AddPerson
{
    public function record()
    {
        $this->arr['firstName'] = $this->firstName;
        $this->arr['lastName'] = $this->lastName;
        $this->arr['date'] = $this->date;
        return $this->arr;
    }
}