<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 01.12.2016
 * Time: 16:32
 */

class Object {

     public $weight;
     public $height;
     public $width;
     protected $price;
     public static $hello = 'Hey, you!';

    function __construct()
    {
        echo "object created ". date('s:u')."<br>";
    }

    public static function sayHello()
    {
        echo "Hello!!!";
    }


    function setWalues($weigt, $height, $width)
    {
        $this->weight = $weigt;
        $this->height = $height;
        $this->width = $width;
    }

    function setPrice($income, $interest)
    {
        $this->price = $income*$interest;
    }

    function showParameters()
    {
        echo "The width is: ".$this->width."<br>";
        echo "The heighth is: ".$this->height."<br>";
        echo "The weight is: ".$this->weight."<br>";
        $this->showPrice();
    }

    function showPrice()
    {
        echo "The price is: ".$this->price."<br>";
    }

}