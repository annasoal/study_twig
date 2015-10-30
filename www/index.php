<?php
require_once (__DIR__.'/autoload.php');
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem([__DIR__.'/templates'],
                                     [__DIR__.'/layouts']);//путь до шаблонов
$twig = new Twig_Environment($loader,
    ['cache' => '/cache',]);//кеширует шаблоны
//

