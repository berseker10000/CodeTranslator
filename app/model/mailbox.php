<?php
require_once 'connection.php';

class Mailbox implements container{
    private $_list;
    
    public $BYOWNER = 0;
    public $BYRECEVIER = 1;
    public $BYSUBJECT = 2;    
    
    public function __construct() {
        $this->_list = array();
    }
    
    public function add(Mail $mail) {
        $db = new Connection();
        $result = $db->add($mail);
        $db->kill();
        return result;
    }
    
    public function load($type, $identifier) {
        $db = new Connection();
        switch($type) {
            case 0:
                $this->_list = $db->load(array('mailByOwner',$identifier->getId()));
                break;
            case 1:
                $this->_list = $db->load(array('mailByReceiver',$identifier->getId()));
                break;
            case 2:
                $this->_list = $db->load(array('mailBySubject',$identifier));
                break;
        }
    }
    
    public function update($item) {
        
    }
    
    public function delete($item) {
        
    }
    
    public function find($item) {
        
    }
    
}