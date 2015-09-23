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
    
    /* Renvoie l'utilisateur $id
     * param $id id de l'utilisateur
     * return $user
     */
    
    
    public function find($id) {
        $user = new user();
        $db = connectDb();
        $query = $db->prepare('Select * From user where id = :id');
        $query->execute(array('id' => $id));
        while($data = $query->fetch()) {
            $user->setId($id);
            $user->setName($data['name']);
            $user->setPassword($data['password']);
            $user->setPoints($data['points']);
            $user->setRescuePassword($data['rescuePassword']);
            
        }
        $query->closeCursor();
        $db = null;
        return $user;
    }
    
    /* Insère un nouvel utilisateur dans la base de données
     * param $this un NOUVEL utilisateur
     * retourne vrai si l'utilisateur a ete inserer, faux sinon
     */
    public function insert() {
        $db = new Connection();
        $db->insert($this);
        $db->kill();
    }
    
    /* Met à jour l'utilisateur dans la base de données
     * Renvoie vrai si la mise à jour a ete effectue, faux sinon
     */
    public function update() {
        $db = connectDb();
        $query = $db->prepare('Update user set name = :name, password = :password, avatar = :avatar, points = :points, rescuePassword = :rescuePassword Where id = :id');
        $result = $query->execute(array("id" => $this->_id,
                              "name" => $this->_name,
                              "password" => $this->_password,
                              "avatar" => $this->_avatar,
                              "points" => $this->_points,
                              "rescuePassword" => $this->_rescuePassword));
        $query->closeCursor();
        $db = null;
        return $result;
    }
    
    /* Supprimer l'utilisateur dans la base de données
     * Renvoie vrai si l'utilsateur a ete supprime, faux sinon
     */
    public function delete() {
        $db = connectDb();
        $query = $db->prepare('Delete from user where id = :id');
        $result = $query->execute(array("id" => $this->_id));
        $query->closeCursor();
        $db = null;
        return $result;
    }
}
