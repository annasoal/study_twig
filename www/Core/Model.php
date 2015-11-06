<?php


namespace Core;


class Model
{
    protected $db;
    protected $table;

    //protected $pk;


    protected function __construct($table, $pk)
    {

        $this->db = SqlDb::app();
        $this->table = $table;
        $this->pk = $pk;

    }

    public function all()
    {

        return $this->db->select("SELECT * FROM {$this->table}");
    }
    public function one($id)
    {

        return $this->db->select("SELECT * FROM {$this->table} WHERE {$this->pk}=:{$this->pk}", [$this->pk => $id])[0];
    }
}