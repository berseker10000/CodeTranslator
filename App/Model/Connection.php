<?php

namespace Ptut\App\Model;
use PDO;

require_once 'connectionProperties.php';
/**
 * Classe Connection
 * @param PDO _bd Connexion à la base SQL
 */
class Connection {
    private $_db;
    private static $_instance;
    
    /**
     * Constructeur de la classe Connection
     */
    public function __construct() {
        $host=HOST_NAME; // ou sql.hebergeur.com
        $user=USER_NAME;      // ou login
        $password=PASSWORD;      // ou xxxxxx
        $dbname=DB_NAME;
        try {
            $this->_db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',$user,$password);
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
    }
    
    public static function getConnection() {
        if (self::$_instance === null) {
            self::$_instance = new Connection();
        }
        return self::$_instance;
    }
    
    public function add($params, $table) {
        $sqlQuery = 'Insert into '.$table.' (';
        foreach($params as $key=>$value) {
            $sqlQuery .= $key.', ';
        }
        $sqlQuery = substr($sqlQuery, 0, -2);
        $sqlQuery .= ') values (';
        foreach($params as $key=>$value) {
            $sqlQuery .= '"'.$value.'", ';
        }
        $sqlQuery = substr($sqlQuery, 0, -2);
        $sqlQuery .= ')';
        return $this->_db->query($sqlQuery) ? true : false;
    }
    
    public function find($fields, $params, $table) {
        if ($fields == []) {
            $sqlQuery = 'Select * ';
        } else {
            $sqlQuery = 'Select ';
            foreach($fields as $field) {
                $sqlQuery .= $field.', ';
            }
            $sqlQuery = substr($sqlQuery, 0, -2);
        }
        $sqlQuery .= ' From '.$table;
        if($params != [] ) {
            $sqlQuery .= ' Where ';
        }
        foreach($params as $key => $value) {
            $sqlQuery .= $key.'='.$value.', ';
        }
        if($params != []) {
        $sqlQuery = substr($sqlQuery, 0, -2);
        }
        return $this->_db->query($sqlQuery);
        
    }
    public function update($values ,$params, $table) {
        $sqlQuery = 'Update '.$table.' Set ';
        foreach($values as $key => $value) {
            $sqlQuery .= $key.' = "'.$value.'", ';
        }
        $sqlQuery = substr($sqlQuery, 0, -2);
        $sqlQuery .= ' where ';
        foreach($params as $key => $value) {
            $sqlQuery .= $key.' = "'.$value.'", ';
        }
        $sqlQuery = substr($sqlQuery, 0, -2);
        $r = $this->_db->query($sqlQuery);
        return $r->rowCount();
        
    }
    
    public function delete($params, $table) {
        $sqlQuery = 'Delete From '.$table.' where ';
        foreach($params as $key => $value) {
            $sqlQuery .= $key . ' = '. $value.', ';
        }
        $sqlQuery = substr($sqlQuery, 0, -2);
        $this->_db->query($sqlQuery);
        return $this->_db->rowCount();
    }
    
    public function query($query, $params = null) {
        $q = $this->_db->prepare($query);
        $q->execute($params);
        return $q;
    }

    
    public function kill() {
        $this->_db = null;
    }
    
    public function lastInsertId() {
        return $this->_db->lastInsertId();
    }
}