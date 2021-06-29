<?php
namespace App\Core;

class Request {

    public static function uri()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH); //use to print the right path just        
        $uri = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . $uri;
        $uri = str_replace(home(), '', $uri);
        return trim($uri ,'/');  
    }
    //WORD GET OR POST MUST BE UPPER_CASE
    public static function get($key, $default=null)
    {
        return $_GET[$key] ?? $_POST[$key] ?? $default ; 
    }
    
    public static function method()
    { //TYPE OF REQUEST GET OR POST 
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}