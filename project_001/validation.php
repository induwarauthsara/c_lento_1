<?php


session_start();
require "connection.php";


$fn = $_POST["fname"];
$ln = $_POST["lname"];
$verify = $_POST["v"];

if(isset($_SESSION["u"])){

    $email = $_SESSION["u"]["email"];

if(empty($fn)){
    echo("Please enter your first name");
}else if(strlen($fn) > 20){
    echo("First name must have 20 characters");
}else if(empty($ln)){
    echo("Please enter your last name");
}else if(strlen($ln) > 20){
    echo("Last name must have 20 characters");
}else if(empty($verify)){
    echo("Please enter verification code");
}else{

    $veri_rs = Database::search("SELECT * FROM `customer` WHERE `verification_code`='".$verify."' AND `email`='".$email."'");

if($veri_rs->num_rows == 1){

    Database::iud("UPDATE `customer` SET `fname`='".$fn."',`lname`='".$ln."'
     WHERE customer.email='".$email."'");

     echo("Success");

     
}else{
    echo("Invalid verification code");
}

}

}else{
    echo("Somthing went wrong");
}

?>