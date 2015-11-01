<?php
include_once (__DIR__.'/autoload.php');
require (__DIR__.'/config.php');
require (__DIR__.'/vendor/autoload.php');


$p = explode('/', $_GET['q']);
$params = [];

foreach($p as $one){
    if($one != '')
        $params[] = $one;
}

$c = "\\Controller\\";
$c .= isset($params[0]) ? ucfirst($params[0]) : 'Page';

$action = 'action_';
$action .= isset($params[1]) ? $params[1] : 'main';

try{
    $conrtroller = new $c();
    $conrtroller->request($action, $params);
}
catch(\Exception $e){
    $c = '\\Controller\\Page';
    $action = 'action_p404';
    $conrtroller = new $c();
    $conrtroller->request($action, $params);
}
