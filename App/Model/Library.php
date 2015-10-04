<?php

namespace Ptut\App\Model;

use \PDO;

class Library {
    
    static public function add($name, $ownerId, $content, $label, $type) {
        $db = Connection::getConnection();
        $params = array(
            'name' => $name,
            'ownerId' => $ownerId,
            'content' => $content,
            'date' => date('Y:d:m G:i:s', time()),
            'label' => $label,
            'type' => $type
        );
        $result = $db->add($params, $table);
        return $result;
    }
    
    static public function find($fields = ['*'], $params = []) {
       $db = Connection::getConnection();
        $table = 'function';
        if(isset($params[0]) && $params[0] == 'public') {
            $table = 'function, library';
            $params = [];
            $params['function.id'] = 'library.functionId';
        }
        $result = $db->find($fields, $params, $table);
        $r = ($result->rowCount() == 1) ? $result->fetch(PDO::FETCH_OBJ) : $result->fetchAll(PDO::FETCH_OBJ);
        return $r;
    }
    
    static public function update($values, $params) {
        $db = Connection::getConnection();
        $params['date'] = date('Y:d:m G:i:s', time());
        $result = $db->update($values, $params, 'function');
        return $result;
    }
    
    static public function delete($params) {
        $db = Connection::getConnection();
        $result = $db->delete($params, 'function');
        return $result;
    }
    
    
}

