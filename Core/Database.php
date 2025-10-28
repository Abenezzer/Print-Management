<?php 

namespace Core;
use \PDO;

class Database {
    private $_db;
    private $_statment;

    public function __construct($config)

    {
        extract($config);
         $this->_db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, [
             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
         ]);
    }

    public function query(string $query, array $params = []) {
        $this->_statment = $this->_db->prepare($query);
        $this->_statment->execute($params);
        return $this;
    }

    public function lastInsertedId() {
        return $this->_db->lastInsertId();
    }

    public function lastCreatedItem($filed) {
        $id = $this->lastInsertedId();
        return $this->query("SELECT * FROM $filed where id  = $id ")->find();

    }



    public function find() {
        return $this->_statment->fetch();

    }

    public function findAll() {
        return $this->_statment->fetchAll();

    }

    public function update() {

    }
    public function delete() {

    }
};