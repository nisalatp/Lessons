<?php

spl_autoload_register('classAutoLoad');

function classAutoLoad($class_name){
    $path = "/app/classes/";
    $ext = ".class.php";

    if(file_exists($path.$class_name.$ext)){
        include_once $path.$class_name.$ext;
    }else{
        return false;
    }
}

?>