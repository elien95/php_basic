<?php



$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

 return [
    'app' => [
        'home_url' =>$_ENV['APP_URL']
    ],

    'database' => [
        'host' => $_ENV['DB_HOST'],
        'name' => $_ENV['DB_NAME'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
                    ]
];
/*
echo '<pre>'; 
print_r($_ENV);
echo '</pre>';
exit;

return[
 'app'=> [
    
    'home_url'=>'http://localhost/php_basics'
    
 ],

 'database' => [
     'host' =>'localhost' ,
   
     'name'=> 'php_basics',
   
     'user'=> 'root',
    
     'password'=> ''
 ]
 ];
 
*/