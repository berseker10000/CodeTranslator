<?php

class Mail {
    private $_id;
    private $_ownerId;
    private $_date;
    private $_content;
    private $_subjectId;
    
    public function __construct() {
        $this->_id = "";
        $this->_ownerId = "";
        $this->_date = date("Y-m-d", mktime());
        $this->_content = "";
        $this->_subjectId = "";
    }
    
    public function getId() {
        return $this->_id;
    }
    
    public function getOwnerId() {
        return $this->_ownerId;
    }
    
    public function getDate() {
        return $this->_date;
    }
    
    public function getContent() {
        return $this->_content;
    }
    
    public function getSubjectId() {
        return $this->_subjectId;
    }
    
    public function setId($id) {
        $this->_id = $id;
    }
    
    public function setOwnerId($ownerId) {
        $this->_ownerId = $ownerId;
    }
    
    public function setContent($content) {
        $this->_content = $content;
    }
    
    public function setSubjectId($subjectId) {
        $this->_subjectId = $subjectId;
    }
} 
