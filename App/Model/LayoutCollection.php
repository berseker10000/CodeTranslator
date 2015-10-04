<?php

namespace Ptut\App\Model;

class LayoutCollection {
    
    static public function add($ownerId, $code) {
        $db = Connection::getConnection();
        $params = array(
            'ownerId' => $ownerId,
            'code' => $code
        );
        $result = $db->add($params, 'layout');
        return $result;
    }
    
    static public function find($fields = ['*'], $params = []) {
        $db = Connection::getConnection();
        if(isset($params[0]) && $params[0] == 'public') {
            $params = array('id' => 0);
        }
        $result = $db->find($fields, $params, 'layout');
        return $result;
    }
    
    static public function delete($params) {
        $db = Connection::getConnection();
        return $db->delete($params, 'layout');
        return result;
    }
    
    static public function update($values, $params) {
        $db = Connection::getConnection();
        $result = $db->update($values, $params, 'layout');
        return $result;
    }
}

