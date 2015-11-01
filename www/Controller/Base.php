<?php


namespace Controller;

use Core\View;

class Base
{
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
    public function __call($name, $params)
    {
        throw new \Exception('Not found');
    }

}