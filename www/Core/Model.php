<?php
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 01.11.2015
 * Time: 11:26
 */

namespace Core;


class Model
{
    protected $db;
    protected $table;
    //protected $pk;


    protected function __construct($table, $pk){

        $this->db = SqlDb::app();
        $this->table = $table;
        //$this->pk = $pk;

    }

    public function all(){

        return $this->db->select("SELECT * FROM {$this->table}");
    }

}