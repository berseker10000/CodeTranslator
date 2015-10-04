<?php

namespace Ptut\App\Model;
use Ptut\App\Controler\Authentification;
use \PDO;

class Dictionnary{
    
    static public function add($name, $password, $avatar) {
        $db = Connection::getConnection();
        $confirmToken = Authentification::generateToken();
        $user = array(
            'name' => $name,
            'password' => $password,
            'avatar' => $avatar,
            'points' => 0,
            'confirmToken' => $confirmToken
        );
        $r = $db->add($user, 'user');

        return $r;
    }
    
    static public function find($fields, $params = []) {
        $db = Connection::getConnection();
        $result = $db->find($fields, $params, 'user');
        if($result->rowCount() == 1) {
            return $result->fetch(PDO::FETCH_OBJ);
        } else {
            return $result->fetchAll(PDO::FETCH_OBJ);
        }
    }
    
    static public function delete($params) {
        $db = Connection::getConnection();
        $result = $db->delete($params, 'user');
        return result;
    }
    
    static public function update($values, $params) {
        $db = Connection::getConnection();
        $result = $db->update($values, $params, 'user');
        return $result;
    }
}