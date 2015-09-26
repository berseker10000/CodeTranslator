<?php
require_once '../entity/user.php';
require_once 'connection.php';

class Dictionnary implements container{
    public $_list;
    private $_size;
    
    public function __construct() {
        $this->_list = array();
        $this->_size = 0;
    }
    
    public function add($item) {
        $db = new Connection();
        $db->add($item);
        $db->kill();
    }
    
    public function find($user) {
        $db = new Connection();
        $result = $db->find($user);
        $db->kill();
        return $result;
    }
    
    public function load($param) {
        $db = new Connection();
        $this->_list = $db->load(array('user'));
        $this->_size = count($this->_list);
        $db->kill();
    }
    
    
    public function delete($user) {
        $db = new Connection();
        $result = $db->delete($user);
        $db->kill();
        return result;
    }
    
    public function update($user) {
        $db = new Connection();
        $result = $db->update($user);
        $db->kill();
        return $result;
    }
}