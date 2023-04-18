<?php

include "../classes/DB.class.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$salt = "I love chocolate";
$hash = md5($email.$salt);

$sql =  "INSERT INTO `user` (`UDI`, `uhash`, `fname`, `lname`, `dob`, `email`, `password`) 
VALUES (NULL, '$hash', '$fname', '$lname', '$dob', '$email', '$pass1')";

$response =  DB::INSERT($sql);

if ($response == TRUE){
    // post insert process

}else{
    // Handle error here
}

?>