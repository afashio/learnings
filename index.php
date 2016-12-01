<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 01.12.2016
 * Time: 16:46
 */
include ("Load.php");

Load::load("Object");

$object1 = new Object();
$object1->setWalues(5,10,15);
$object1->setPrice(10,1.2);

echo "Object1 parameters: <br>";
    $object1->showParameters();
echo '<br>';

$object2 = new Object();
$object2->setWalues(50,30,22);
$object2->setPrice(10, 1.5);

echo "Object2 parameters: <br>";
    $object2->showParameters();

Object::sayHello();
echo Object::$hello;
