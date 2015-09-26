<?php


/**
 * Classe EMail
 * @param _id Identifiant du Email
 * @param _ownerId Identifiant du propriétaire du Email
 * @param _date Date de création du Email
 * @param _content Contenu du Email
 * @param _subjectId Sujet de discussion auquel appartient le Email
 */
class EMail{
    private $_id;
    private $_ownerId;
    private $_date;
    private $_content;
    private $_subjectId;
    
    /**
     * Constructeur de la classe mail
     */
    public function __construct() {
        $this->_id = "";
        $this->_ownerId = "";
        $this->_date = date("Y-m-d", mktime());
        $this->_content = "";
        $this->_subjectId = "";
    }
    
    /**
     * Renvoie l'identifiant de Mail
     * @return int
     */
    public function getId() {
        return $this->_id;
    }
    
    /**
     * Renvoie l'identifiant du propriétaire de Mail
     * @return id
     */
    public function getOwnerId() {
        return $this->_ownerId;
    }
    
    /**
     * Renvoie la date de création de Mail
     * @return date
     */
    public function getDate() {
        return $this->_date;
    }
    
    /**
     * Renvoie le contenu du mail
     * @return string
     */
    public function getContent() {
        return $this->_content;
    }
    
    /**
     * Renvoie le sujet de discussion de Mail
     * @return int
     */
    public function getSubjectId() {
        return $this->_subjectId;
    }
    
    /**
     * Modifie l'identifiant de Mail
     * @param int $id
     */
    public function setId($id) {
        $this->_id = $id;
    }
    
    /**
     * Modifie l'identifiant du propritétaire de Mail
     * @param int $ownerId
     */
    public function setOwnerId($ownerId) {
        $this->_ownerId = $ownerId;
    }
    
    /**
     * Modifie le contenu de Mail
     * @param string $content
     */
    public function setContent($content) {
        $this->_content = $content;
    }
    
    /**
     * Modifie le sujet de discussion de Mail
     * @param int $subjectId
     */
    public function setSubjectId($subjectId) {
        $this->_subjectId = $subjectId;
    }
} 
