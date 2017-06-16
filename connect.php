<?php
include('autoload.php');
//include ('Test.php');
//include ('ChildTest.php');
try {
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $obj = new Test;
    }
    if(isset($_POST['add'])){
        $fname = $_POST['cfname'];
        $lname = $_POST['clname'];
        $obj = new ChildTest;
    }
//    $obj = new Test;
//    $obj1 = new Test;
//    $obj->setData("Ed","Dan");
//    $obj->setData("Ed","Dan");
    $obj->setData($fname,$lname);
    $obj->record();
//    $obj1->record();
    $new = array();
    $new [] = $obj->arr;
    ob_start();                    // start reading the internal buffer
    var_dump( $new);
    $result = ob_get_contents(); // assigning the internal buffer contents to variable
    header("location:index.php?objects=$result");
    ob_end_clean();

} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}