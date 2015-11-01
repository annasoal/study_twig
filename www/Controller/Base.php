<?php
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 01.11.2015
 * Time: 11:00
 */

namespace Controller;

use Core\View;

class Base {
    protected $params;
    protected $page;
    protected $template;
    protected $view;

    public function __construct()
    {

        $this->view = View::app();
        $this->page = new \stdClass();

    }

    public function request($action, $params = [])
    {
        $this->params = $params;
        $this->$action();

    }

}