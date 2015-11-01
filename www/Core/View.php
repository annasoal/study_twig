<?php
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 30.10.2015
 * Time: 17:45
 */

namespace Core;

use Twig_Autoloader;
use Twig_Environment;
use Twig_Loader_Filesystem;

class View
{
    private static $instance;
    private $twig;


    public static function app()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __construct()
    {
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem([__DIR__ . '/../layouts',
                                              __DIR__ . '/../templates']
    );//путь до шаблонов
        return $this->twig = new Twig_Environment($loader,
            ['cache' => false]);//кеширует шаблоны
    }
    public function render($name,$object)
    {
        return $this->twig->render($name,$object);
    }

}