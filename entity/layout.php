<?php

class layout {
    private $_id;
    private $_ownerId;
    private $_code;
    
    public function __construct() {
        $this->id = "";
        $this->ownerId = "";
        $this->date = "";
        $this->code = "";
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getOwnerId() {
        return $this->ownerId;
    }

    public function getCode() {
        return $this->_code;
    }    
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function setOwnerId($ownerId) {
        $this->ownerId = $ownerId;
    }

    public function setCode($code) {
        $this->_code = $code;
    }
}