<?php
namespace Core;


class SqlDb
{

    private static $instance;
    private $db;


    public static function app()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
        $this->db = new \PDO('mysql:host=' . HOST . ';dbname=' . DNAME, USER, PASSWORD);
        $this->db->exec('SET NAMES UTF8');
        $this->db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    }

    public function select($query, $params = [])
    {
        $q = $this->db->prepare($query);
        $q->execute($params);

        if ($q->errorCode() != \PDO::ERR_NONE) {
            $info = $q->errorInfo();
            die($info[2]); // времменная мера
        }

        return $q->fetchAll();
    }
}

