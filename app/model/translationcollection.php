<?php

class TranslationCollection implements container{
    public $_list;
    
    public function __construct() {
        $this->_list = array();
    }
    
    public function add($translation) {
        if($translation instanceof Translation) {
            $db = new Connection();
            $result = $db->add($translation);
            $db->kill();
            return $result;
        }
    }
    
    public function find($translation) {
        if($translation instanceof Translation) {
            $db = new Connection();
            $result = $db->find($translation);
            $db->kill();
            return $result;
        }
    }
    
    public function load($param) {
        $db = new Connection();
        $this->_list = $db->load('translation');
        $db->kill();
    }
    
    public function delete($translation) {
        $db = new Connection();
        $result = $db->delete($translation);
        $db->kill();
        return $result;
    }

    public function update($translation) {
        $db = new Connection();
        $result = $db->update($translation);
        $db->kill();
        return $result;
    }

}
