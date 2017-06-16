<?php
include_once ('autoload.php');
class ChildTest extends Test {
    public function __construct()
    {
        echo "Starting ".__CLASS__." class";
    }
    public function __destruct()
    {
        parent::__destruct();
        echo "Bye! Bye! See you later from ".__CLASS__;
    }
}