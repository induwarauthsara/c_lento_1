<?php

require "connection.php";
session_start();

if(isset($_SESSION["u"])){

$user_email = $_SESSION["u"]["email"];


$fn = $_POST["f"];
$ln = $_POST["l"];
$email = $_POST["em"];
$password = $_POST["pw"];
$mobile = $_POST["m"];
$gender = $_POST["gen"];
$nic = $_POST["nic"];
$country = $_POST["cry"];
$address = $_POST["adr"];


     $user = Database::search("SELECT * FROM `customer` WHERE `email`='".$user_email."'");

     
     
     if($user->num_rows == 1){

     
    Database::iud("UPDATE `customer` SET `fname`='".$fn."',`lname`='".$ln."',`email`='".$email."',`password`='".$password."',
    `mobile`='".$mobile."',`gender_gender_id`='".$gender."',`address`='".$address."',`country_id`='".$country."',`nic`='".$nic."' WHERE `email`='".$user_email."'");

    echo("Success");

     }else{
        echo("Please sign in first");
     }

    
     
}else{
    echo("Invalid user");
}

?>