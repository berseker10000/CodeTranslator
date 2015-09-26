<?php


/**
 * Classe Traduction
 * @param _layoutId L'identifiant du calque de traduction correspondant
 * @param _language Langage de la traduction
 * @param _code Code de la traduction
 */
class Translation {
    private $_layoutId;
    private $_language;
    private $_code;
    
    /**
     * Constructeur de la classe Translation
     */
    public function __construct__() {
        $this->_layoutId = "";
        $this->_language = "";
        $this->_code = "";
    }
    
    /**
     * Renvoie l'id du calque de Translation correspondant
     * @return int
     */
    public function getLayoutId() {
        return $this->_layoutId;
    }
    
    /**
     * Renvoie le langage de Translation
     * @return string
     */
    public function getLanguage() {
        return $this->_language;
    }
    
    /**
     * Renvoie le code de Translation
     * @return string
     */
    public function getCode() {
        return $this->_code;
    }
    
    /**
     * Modifie l'identifiant de Translation correspondante
     * @param int $layoutId
     */
    public function setLayoutId($layoutId) {
        $this->_layoutId = $layoutId;
    }
    
    /**
     * Modifie le langage de Translation
     * @param string $language
     */
    public function setLanguage($language) {
        $this->_language = $language;
    }
    
    /**
     * Modifie le code de Translation
     * @param string $code
     */
    public function setCode($code) {
        $this->_code = $code;
    }
    
}
