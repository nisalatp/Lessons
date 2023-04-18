<!doctype html>
<?php

  include "app/includes/autoloader.include.php";
  $path = 'app/views/';
  $ext = '.view.php';

  session_start();

  if(isset($_GET['m'])){$page = $_GET['m'];}else{$page = 'home';}
  $current  =$path.$page.$ext;
?>
<html lang="en">
  <head>
    <?php require_once "app/includes/head.include.php"; ?>
    <?php require_once "app/includes/styles.include.php"; ?>
    <title>Bootstrap demo</title>
  </head>
  <body>
  <?php require_once "app/includes/navbar.include.php"; ?>
    <div class="content">
        <?php require_once $current; ?>
    </div>
    <?php require_once "app/includes/footer.include.php"; ?>

    <?php 
    if (!isset($_SESSION['user_hash'])){
     require_once "app/includes/mdlRegUser.include.php";
     require_once "app/includes/mdlLogUser.include.php"; 
    }
    ?>
    <?php require_once "app/includes/scripts.include.php"; ?>
  </body>
</html>