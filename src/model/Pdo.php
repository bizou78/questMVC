<?php

namespace Model;

class Pdo {

    private $pdo;

    public function __construct(){
        $this->pdo = new \PDO('mysql:host=127.0.0.1;dbname=quest_manager;charset=utf8','root','root');
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function execGetAllQuests($statement){
        $res = $this->pdo->query($statement, \PDO::FETCH_OBJ);
        $datas = $res->fetchAll();

        return $datas;
    }

}