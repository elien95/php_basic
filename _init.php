<?php

use App\App;
use App\Database\DBConnection;
use App\Database\QueryBuilder;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require 'vendor/autoload.php';

App::set('config' ,require 'config.php');
//return trim(App::get('config')['app']['home_url'],'/');

$log =new Logger('PHP_BASICS');
$log->pushHandler(new StreamHandler('queries.log' , Logger::INFO));

QueryBuilder::make(
    DBConnection::make(App::get('config')['database']), 
    $log
);
