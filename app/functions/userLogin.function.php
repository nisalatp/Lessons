<?php 

include "../classes/DB.class.php";

//echo 'Login From Submitted<br>'; 

$email =  $_POST['email'];
$pass =  $_POST['pass1'];

$sql = "";

$response = DB::READ("SELECT * FROM user WHERE `email`='$email' AND `password` = '$pass'");


if ($response == false){
    echo "Username and or Password is wrong! Try again.";
}else{
    // user login process
    $user = $response->fetch_array();
    session_destroy();
    session_start();

     $_SESSION['user_email'] = $user['email'];
     $_SESSION['user_fname'] = $user['fname'];
     $_SESSION['user_lname'] = $user['lname'];
     $_SESSION['user_dob'] = $user['dob'];
     $_SESSION['user_hash'] = $user['uhash'];

     header('Location: /');
    
}

?>