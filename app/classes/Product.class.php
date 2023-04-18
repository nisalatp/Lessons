<?php

class Product{

    private $p_ID;
    private $p_Name;
    private $p_Dscp;

    private static $p_Count = 0;


    public function __construct($id=NULL, $name=NULL, $desc=NULL)
    {
        self::$p_Count = self::$p_Count + 1;
        $this->p_ID = $id;
        $this->p_Name = $name;
        $this->p_Dscp = $desc;
    } 

    public function __destruct()
    {
        self::$p_Count = self::$p_Count - 1;
    }

  
    public static function getCount(){
        return self::$p_Count;
    }

    public function setName($name){
        $this->p_Name = $name;
    }

    public function setID($id){
        $this->p_ID = $id;
    }

    public function setDescr($desc){
        $this->p_Dscp = $desc;
    }

    public function getName(){
        return $this->p_Name;
    }

    public function getID(){
        return $this->p_ID;
    }

    public function getDescr(){
        return $this->p_Dscp;
    }



}




?>
