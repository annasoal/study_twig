<?php
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 05.11.2015
 * Time: 16:58
 */

namespace Model;


class Tags
    extends \Core\Model
{

    private static $instance;

    public static function app(){
        if(self::$instance == null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __construct(){
        parent::__construct('tags', 'id_tag');
    }

    public function getTagsForAll($goods_id){

        if(empty($goods_id))
            return [];

        $in = implode(', ', $goods_id);
        $tmp = $this->db->select("SELECT id_tag, id_goods, name FROM `goods_tags`
                                  LEFT JOIN {$this->table} using(id_tag)
                                  WHERE id_goods IN ($in)");
        $res = [];

        foreach($tmp as $one){
            if($res[$one['id_goods']] == null) {
                $res[$one['id_goods']] = [];
            }
            $res[$one['id_goods']][] = $one;
        }

        return $res;

    }

    public function getTagsForOne($id_goods){
        return $this->db->select("SELECT id_tag, id_goods, name FROM `goods_tags`
                                  LEFT JOIN {$this->table} using(id_tag)
                                  WHERE id_goods=:id_goods", ['id_goods' => $id_goods]);
    }
}