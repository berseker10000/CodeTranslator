<?php
require_once '../entity/user.php';
require_once 'connection.php';

class Dictionnary {
    private $_list;
    private $_size;
    
    public function __construct() {
        $this->_list = array();
        $this->_size = 0;
    }
    
    public function add(User $item) {
        $db = new Connection();
        $db->add($item);
        $db->kill();
    }
    
    public function find(User $item) {
        $db = new Connection();
        $result = $db->find($item);
        $db->kill();
        var_dump($result);
        return $result;
    }
    
    public function findAll() {
        $db = new Connection();
        $this->_list = $db->findAll('user');
        $this->_size = count($this->_list);
        $db->kill();
    }
    
    public function getList() {
        return $this->_list;
    }
    
}