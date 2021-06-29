<?php

namespace App;
 class App
  {

    private static $entries =[];   //this array to put data 

    public static function set($key ,$value)  //here to add data 

    {
        static::$entries[$key] =$value ;

    }

    public static function get($key , $default=null) //here to bring data from array

    {
    return static::$entries[$key] ?? $default;
    }
 }