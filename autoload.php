<?php
spl_autoload_register(function ($name) {
    require ($name.'.php');
//    include $name.'.php';
//    throw new Exception("Unable to load $name.");
});