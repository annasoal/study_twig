<?php


namespace Controller;

use Model\Goods as MGoods;

class Goods
    extends Base
{

    protected function action_all()
    {
        $this->page->title = 'Товары';
        $this->page->heading = 'Лучшие газонокосилки';
        $this->page->content = MGoods::app()->all();
        $this->template = 'allgoods.html';
        echo $this->view->render($this->template, ['page' => $this->page]);


    }

}