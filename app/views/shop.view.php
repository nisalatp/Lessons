<?php

echo Product::getCount()."<br>";
$Salmon = new Product;

$Salmon->SetName("Salmon Fish");
$Salmon->setID('FHS_SAL_01');
$Salmon->setDescr("Fine salmon from colarado, USA");

//echo $Salmon->getCount()."<br>";
echo Product::getCount()."<br>";

echo $Salmon->getID()."<br>";
echo $Salmon->getName()."<br>";
echo $Salmon->getDescr()."<br>";

echo Product::getCount()."<br>";

$Tuna = new Product("FSH_TUN_01","Tuna Fish","Fine tuna from Beruwala Sri Lanka");
echo $Tuna->getID()."<br>";
echo $Tuna->getName()."<br>";
echo $Tuna->getDescr()."<br>";

echo Product::getCount()."<br>";
unset($Salmon);

//echo $Salmon->getName()."<br>";

//$waiter = new Person;
echo Product::getCount()."<br>";

unset($Tuna);

echo Product::getCount()."<br>";
?>
