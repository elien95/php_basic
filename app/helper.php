<?php 
use App\App;

//to get url main page
 function home()
 {
   return trim(App::get('config')['app']['home_url'],'/');
}
//to re-rout special uri 
function redirect($to)
{
    header("Location: {$to}");
}
//to re-rout  uri  main page
function redirect_home()
{
    redirect(home());
}
//to re-rout  uri  pre-page 
function back()
{  
    redirect($_SERVER['HTTP_REFERER'] ?? home());  
}
//to load page in interfaces gui in controller
//function exract use to convert associative array to varible and work with name
function view($name ,$data)
{
    extract($data); 
    require "resources/{$name}.view.php";
}