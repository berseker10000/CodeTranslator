<?php

class Algorithm {
    private $_id;
    private $_name;
    private $_ownerId;
    private $_content;
    private $_date;
    private $_label;
    private $_type;
    
    public function __constructor() {
        $this->_id = '';
        $this->_name = '';
        $this->_ownerId = '';
        $this->_content = '';
        $this->_date = date("Y-m-d", mktime());
        $this->_label = '';
        $this->_type = 'nul';   
    }
    
    public function getId() {
        return $this->_id;
    }
    
    public function getName() {
        return $this->_name;
    }
    
    public function getOwnerId() {
        return $this->_ownerId;
    }
    
    public function getContent() {
        return $this->_content;
    }
    
    public function getDate() {
        return $this->_date;
    }
    
    public function getLabel() {
        return $this->_label;
    }
    
    public function getType() {
        return $this->_type;
    }
    
    public function setId($id) {
        $this->_id = $id;
    }
    
    public function setName($name) {
        $this->_name = $name;
    }
    
    public function setOwnerId($ownerId) {
        $this->_ownerId = $ownerId;
    }
    
    public function setContent($content) {
        $this->_content = $content;
    }
    
    public function setDate($date) {
        $this->_date = $date;
    }
    
    public function setLabel($label) {
        $this->_label = $label;
    }
    
    public function setType($type) {
        $this->_type = $type;
    }
    
    /* Renvoie la fonction $id
     * param $id l'identifiant de la fonction recherchée
     * return $algorithm la fonction recherchée
     */
    public function find($id) {
        $algorithm = new Algorithm();
        $db = new Connection();
        $query = $db->getConnection()->prepare('Select * From function where id = :id');
        $query->execute(array("id" => $id));
        $result = new Algorithm();
        while($data = $query->fetch()) {
            $result->setDate($data['date']);
            $result->setContent($data['content']);
            $result->setId($data['id']);
            $result->setLabel($data['label']);
            $result->setName($data['name']);
            $result->setOwnerId($data['ownerId']);
            $result->setType($data['type']);
        }
        $db->kill();
        return $result;
    }
    
    /* Renvoie la liste des fonctions du propriétaire $ownerId
     * param $ownerId l'id du propriétaire des fonctions
     * return $algorithmList la liste des fonctions de $ownerId
     */
    static function findAllPrivate($ownerId) {
        $algorithmList;
        $i = 0;
        $db = connectDb();
        $query = $db->prepare('Select function.* From function Join user On function.ownerId = user.id Where user.id = :ownerId');
        $query->execute(array("ownerId" => $ownerId));
        while($data = $query->fetch()) {
            $algorithmList[$i] = new Algorithm();
            $algorithmList[$i]->setId($data['id']);
            $algorithmList[$i]->setDate($data['date']);
            $algorithmList[$i]->setContent($data['content']);
            $algorithmList[$i]->setName($data['name']);
            $algorithmList[$i]->setOwnerId($data['ownerId']);
            $algorithmList[$i]->setType($data['type']);
            $algorithmList[$i]->setLabel($data['label']);
            $i++;
        }
        $query->closeCursor();
        $db = null;
        return $algorithmList;
    }
    
    /* Renvoie la liste des fonctions publiques
     * return $algorithmList la liste des fonctions publiques
     */
    static function findAllPublic() {
        $algorithmList;
        $i = 0;
        $db = connectDb();
        $query = $db->query('Select function.* From function Join library on function.id = library.functionId;');
        while($data = $query->fetch()) {
            $algorithmList[$i] = new Algorithm();
            $algorithmList[$i]->setId($data['id']);
            $algorithmList[$i]->setDate($data['date']);
            $algorithmList[$i]->setContent($data['content']);
            $algorithmList[$i]->setName($data['name']);
            $algorithmList[$i]->setOwnerId($data['ownerId']);
            $algorithmList[$i]->setType($data['type']);
            $algorithmList[$i]->setLabel($data['label']);
            $i++;
        }
        $query->closeCursor();
        $db = null;
        return $algorithmList;
    }
    
    /* Insere l'algorithme dans la table de fonction
     * Retourne vrai si l'insertion a ete effectue, faux sinon
     */
    function insert() {
        $db = new Connection();
        $result = $db->insert($this);
        $db->kill();
        return $result;
    }
    
    
}
