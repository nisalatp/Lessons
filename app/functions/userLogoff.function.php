<?php
$_SESSION['user_email'] =NULL;
$_SESSION['user_fname'] = NULL;
$_SESSION['user_lname'] = NULL;
$_SESSION['user_dob'] = NULL;
$_SESSION['user_hash'] = NULL;

session_destroy();
session_start();

header('Location: /');

?> 