<?php

/**
 * Classe Algorithme
 * @param _id L'id de l'algorithme
 * @param _name Le nom de l'algorithme
 * @param _ownerId Le nom du propriétaire
 * @param _content Le code de l'algortihme
 * @param _date Date de création de l'algorithme
 * @param _label En-tete de l'algorithme servant de fiche explicative
 * @param _type Type retourné par l'algorithme
 */
class Algorithm {
    private $_id;
    private $_name;
    private $_ownerId;
    private $_content;
    private $_date;
    private $_label;
    private $_type;
    
    /**
     * Constructeur de la classe Algorithm
     * return Un nouvel algorithm
     */
    public function __constructor() {
        $this->_id = '';
        $this->_name = '';
        $this->_ownerId = '';
        $this->_content = '';
        $this->_date = date("Y-m-d", mktime());
        $this->_label = '';
        $this->_type = 'nul';   
    }
    
    /**
     * Renvoie l'id de l'algorithm
     * @return int
     */
    public function getId() {
        return $this->_id;
    }
    
    /**
     * Renvoie le nom de l'algorithm
     * @return string
     */
    public function getName() {
        return $this->_name;
    }
    
    /**
     * Renvoie le propriétaite de l'algorithm
     * @return int
     */
    public function getOwnerId() {
        return $this->_ownerId;
    }
    
    /**
     * Renvoie le code de l'algorithm
     * @return string
     */
    public function getContent() {
        return $this->_content;
    }
    
    /**
     * Renvoie la date de création de l'algorithm
     * @return date
     */
    public function getDate() {
        return $this->_date;
    }
    
    /**
     * Renvoie le label de l'algorithm
     * @return string
     */
    public function getLabel() {
        return $this->_label;
    }
    
    /**
     * Renvoie de type retourné par l'algorithm
     * @return string
     */
    public function getType() {
        return $this->_type;
    }
    
    /**
     * Modifie l'id de l'algorithm
     * @param type $id
     */
    public function setId($id) {
        $this->_id = $id;
    }
    
    /**
     * Modifie le nom de l'algorithm
     * @param type $name
     */
    public function setName($name) {
        $this->_name = $name;
    }
    
    /**
     * Modifie le propritétaire de l'algorithm
     * @param type $ownerId
     */
    public function setOwnerId($ownerId) {
        $this->_ownerId = $ownerId;
    }
    
    /**
     * Modifie le code de l'algorithm
     * @param type $content
     */
    public function setContent($content) {
        $this->_content = $content;
    }
    
    /**
     * Modifie la date de création de l'algorithm
     * @param type $date
     */
    public function setDate($date) {
        $this->_date = $date;
    }
    
    /**
     * Modifie l'étiquette de l'algorithm
     * @param type $label
     */
    public function setLabel($label) {
        $this->_label = $label;
    }
    
    /**
     * Modifie le type retourné par l'algorithm
     * @param type $type
     */
    public function setType($type) {
        $this->_type = $type;
    }
    
}
