<?php

class Translation {
    private $_layoutId;
    private $_language;
    private $_code;
    
    public function __construct__() {
        $this->_layoutId = "";
        $this->_language = "";
        $this->_code = "";
    }
    
    public function getLayoutId() {
        return $this->_layoutId;
    }
    
    public function getLanguage() {
        return $this->_language;
    }
    
    public function getCode() {
        return $this->_code;
    }
    
    public function setLayoutId($layoutId) {
        $this->_layoutId = $layoutId;
    }
    
    public function setLanguage($language) {
        $this->_language = $language;
    }
    
    public function setCode($code) {
        $this->_code = $code;
    }
    
}
