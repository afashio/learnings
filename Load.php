<?php

/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 01.12.2016
 * Time: 17:25
 */
class Load
{
    function __construct()
    {

    }

    /**
     * @param string - the name of class;
     */
    public static function load($class)
    {
        include ($class.".php");
    }

}