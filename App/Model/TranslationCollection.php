<?php

namespace Ptut\App\Model;

use \PDO;

class TranslationCollection {
    
    static public function add($layoutId, $language, $code) {
            $db = Connection::getConnection();
            $params = array(
                'layoutId' => $layoutId,
                'language' => $language,
                'code' => $code
            );
            $result = $db->add($params, 'translation');
            return $result;
        
    }
    
    static public function find($fields = ['*'], $params = []) {
            $db = Connection::getConnection();
            $result = $db->find($fields, $params, 'translation');
            $r = $result->rowCount() == 1 ? $result->fetch(PDO::FETCH_OBJ) : $result->fetchAll(PDO::FETCH_OBJ);
            return $r;
        
    }
    
    static public function delete($params) {
        $db = Connection::getConnection();
        $result = $db->delete($params, 'translation');
        return $result;
    }

    static public function update($values, $params) {
        $db = Connection::getConnection();
        $result = $db->update($values, $params, 'translation');
        return $result;
    }

}
