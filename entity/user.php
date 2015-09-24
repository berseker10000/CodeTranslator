<?php
class User {
    private $_id;
    private $_name;
    private $_password;
    private $_avatar;
    private $_points;
    private $_rescuePassword;
    
    // Constructeur
    public function __construct() {
        $this->_id = '';
        $this->_name = '';
        $this->_password = '';
        $this->_avatar = '';
        $this->_points = '';
        $this->_rescuePassword = '';     
    }
    
    public function getId() {
        return $this->_id;
    }    
    
    public function getName() {
        return $this->_name;
    }    
    
    public function getPassword() {
        return $this->_password;
    }    
    
    public function getAvatar() {
        return $this->_avatar;
    }    
    
    public function getPoints() {
        return $this->_points;
    }    
    
    public function getRescuePassword() {
        return $this->_rescuePassword;
    }
    
    /* Modifie l'id de l'utilisateur
     * param $id Le nouvel id
     */
    public function setId($id) {
        $this->_id = $id;
    }
    
    /* Modifie le nom de l'utilisateur
    * param $name Le nouveau nom
    */
    public function setName($name) {
        $this->_name = $name;
    }
    
    /* Modifie mot de passe de l'utilisateur
    * param $password le nouveau mot de passe
    */
    public function setPassword($password) {
        $this->_password = $password;
    }
    
    /* Modifie l'avatar de l'utilisateur
    * param $avatar le lien du nouvel avatar de l'utilisateur
    */
    public function setAvatar($avatar) {
        $this->_avatar = $avatar;
    }
    
    /* Modifie le nombre de point de l'utilisateur
     * param $points le nouveau nombre de points de l'utilisateur
     */
    public function setPoints($points) {
        $this->_points = $points;
    }
    
    /* Modifie le mot de passe de secours de l'utilisateur
     * param $rescuePassword le nouveau mot de passe de secours
     */
    public function setRescuePassword($rescuePassword) {
        $this->_rescuePassword = $rescuePassword;
    }
    
}
