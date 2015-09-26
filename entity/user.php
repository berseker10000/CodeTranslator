<?php

/**
 * Classe utilisateur
 * @param _id L'id de l'utilisateur
 * @param _name Le nom/pseudo de l'utilisateur
 * @param _password Le mot de passe de l'utilisateur
 * @param _avatar L'avatar de l'utilisateur
 * @param _points Le nombre de points de l'utilisateur
 * @param _rescuePassword Le mot de passe de sécurité
 */
class User {
    private $_id;
    private $_name;
    private $_password;
    private $_avatar;
    private $_points;
    private $_rescuePassword;
    
    /**
     * Constructeur de la classe User
     */
    public function __construct() {
        $this->_id = '';
        $this->_name = '';
        $this->_password = '';
        $this->_avatar = '';
        $this->_points = '';
        $this->_rescuePassword = '';     
    }
    
    /**
     * Renvoie l'id du User
     * @return int
     */
    public function getId() {
        return $this->_id;
    }    
    
    /**
     * Renvoie le nom du User
     * @return string
     */
    public function getName() {
        return $this->_name;
    }    
    
    /**
     * Renvoie le mot de passe du User
     * @return string
     */
    public function getPassword() {
        return $this->_password;
    }    
    
    /**
     * Renvoie l'avatar du User
     * @return string
     */
    public function getAvatar() {
        return $this->_avatar;
    }    
    
    /**
     * Renvoie le nombre de point du User
     * @return int
     */
    public function getPoints() {
        return $this->_points;
    }    
    
    /**
     * Renvoie le mot de passe de sécurité de l'utilisateur
     * @return string
     */
    public function getRescuePassword() {
        return $this->_rescuePassword;
    }
    
    /**
     * Modifie l'id de l'utilisateur
     * @param $id Le nouvel id
     */
    public function setId($id) {
        $this->_id = $id;
    }
    
    /**
     * Modifie le nom de l'utilisateur
     * @param $name Le nouveau nom
     */
    public function setName($name) {
        $this->_name = $name;
    }
    
    /**
     * Modifie mot de passe de l'utilisateur
     * @param $password le nouveau mot de passe
     */
    public function setPassword($password) {
        $this->_password = $password;
    }
    
    /**
     * Modifie l'avatar de l'utilisateur
     * @param $avatar le lien du nouvel avatar de l'utilisateur
     */
    public function setAvatar($avatar) {
        $this->_avatar = $avatar;
    }
    
    /**
     * Modifie le nombre de point de l'utilisateur
     * @param $points le nouveau nombre de points de l'utilisateur
     */
    public function setPoints($points) {
        $this->_points = $points;
    }
    
    /**
     * Modifie le mot de passe de secours de l'utilisateur
     * @param $rescuePassword le nouveau mot de passe de secours
     */
    public function setRescuePassword($rescuePassword) {
        $this->_rescuePassword = $rescuePassword;
    }
    
}
