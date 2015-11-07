<?php


namespace Controller;

use Model\Goods as MGoods;
use Model\Tags as MTags;

class Goods
    extends Base
{
    protected $goods;
    protected $tags;


    public function __construct (){

        parent::__construct();
        $this->goods = MGoods::app();
        $this->tags = MTags::app();
    }

    public function action_all()
    {
        $this->page->title = 'Товары';
        $this->page->heading = 'Лучшие газонокосилки';
        $this->page->goods = $this->goods->all();
        $goods_id = [];

        foreach($this->page->goods as $one) {
            $goods_id[] = $one['id_goods'];
        }

        $this->page->tags = $this->tags->getTagsForAll($goods_id);
        $this->template = 'allgoods.html';
        echo $this->view->render($this->template, ['page' => $this->page]);
    }


    protected function action_one()
    {
        $id = $this->params[2];
        $this->goods = MGoods::app()->one($id);
        $this->tags = MTags::app()->getTagsForOne($id);
        $this->template = 'goodscard.html';
        var_dump($this->tags);
        echo $this->view->render($this->template, ['goods' => $this->goods,'tags'=>$this->tags]);


    }

}