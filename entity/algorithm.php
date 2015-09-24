<?php

class Algorithm {
    private $_id;
    private $_name;
    private $_ownerId;
    private $_content;
    private $_date;
    private $_label;
    private $_type;
    
    public function __constructor() {
        $this->_id = '';
        $this->_name = '';
        $this->_ownerId = '';
        $this->_content = '';
        $this->_date = date("Y-m-d", mktime());
        $this->_label = '';
        $this->_type = 'nul';   
    }
    
    public function getId() {
        return $this->_id;
    }
    
    public function getName() {
        return $this->_name;
    }
    
    public function getOwnerId() {
        return $this->_ownerId;
    }
    
    public function getContent() {
        return $this->_content;
    }
    
    public function getDate() {
        return $this->_date;
    }
    
    public function getLabel() {
        return $this->_label;
    }
    
    public function getType() {
        return $this->_type;
    }
    
    public function setId($id) {
        $this->_id = $id;
    }
    
    public function setName($name) {
        $this->_name = $name;
    }
    
    public function setOwnerId($ownerId) {
        $this->_ownerId = $ownerId;
    }
    
    public function setContent($content) {
        $this->_content = $content;
    }
    
    public function setDate($date) {
        $this->_date = $date;
    }
    
    public function setLabel($label) {
        $this->_label = $label;
    }
    
    public function setType($type) {
        $this->_type = $type;
    }
    
}
