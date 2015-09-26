<?php


/**
 * Classe de Calque de Traduction
 * @param int _id Identifiant du calque
 * @param int _ownerId Identifiant du propriétaire du calque
 * @param string _code Code du calque
 */
class Layout {
    private $_id;
    private $_ownerId;
    private $_code;
    
    /**
     * Constructeur de la classe Layout
     */
    public function __construct() {
        $this->id = "";
        $this->ownerId = "";
        $this->date = "";
        $this->code = "";
    }
    
    /**
     * Renvoie l'id du Layout
     * @return int
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * Renvoie l'identifiant du propriétaire du calque
     * @return int
     */
    public function getOwnerId() {
        return $this->ownerId;
    }

    /**
     * Renvoie le code du calque
     * @return string
     */
    public function getCode() {
        return $this->_code;
    }    
    
    /**
     * Modifie l'identifiant du Layout
     * @param int $id
     */
    public function setId($id) {
        $this->id = $id;
    }
    
    /**
     * Modifie l'identifiant du propriétaire du Layout
     * @param int $ownerId
     */
    public function setOwnerId($ownerId) {
        $this->ownerId = $ownerId;
    }

    /**
     * Modifie le code du calque
     * @param string $code
     */
    public function setCode($code) {
        $this->_code = $code;
    }
}