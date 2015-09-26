<?php

class LayoutCollection implements container{
    public $_list;
    
    public function __construct() {
        $this->_list = array();
    }
    
    public function add($layout) {
        $db = new Connection();
        $result = $db->add($layout);
        $db->kill();
        return $result;
    }
    
    public function find($layout) {
        $db = new Connection();
        $result = $db->find($layout);
        $db->kill();
        return $result;
    }
    
    public function load($param) {
        $db = new Connection();
        if($param == 'public') {
            $this->_list = $db->load(array('layout', 'public'));
        } else {
            if($param instanceof Layout) {
                $this->_list = $db->load(array('layout',$param->getId()));
            }
        }
        $db->kill();
    }
    
    
    public function delete($layout) {
        $db = new Connection();
        $result = $db->delete($layout);
        $db->kill();
        return result;
    }
    
    public function update($layout) {
        $db = new Connection();
        $result = $db->update($layout);
        $db->kill();
        return $result;
    }
}

