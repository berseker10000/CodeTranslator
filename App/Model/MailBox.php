<?php

namespace Ptut\App\Model;

use \PDO;

class MailBox {
    
    static public $BYOWNER = 0;
    static public $BYRECEVIER = 1;
    static public $BYSUBJECT = 2;    
    
    static public function add($ownerId, $content, $subjectId) {
        $db = Connection::getConnection();
        $params = array(
            'ownerId' => $ownerId,
            'date' => date('Y:d:m G:i:s', time()),
            'content' => $content,
            'subjectId' => $subjectId
        );
        $result = $db->add($params, 'mail');
        return $result;
    }
    
    static public function update($values, $params) {
        $db = Connection::getConnection();
        $params['date'] = date('Y:d:m G:i:s', time());
        $result = $db->update($values, $params, 'mail');
        return $result;
    }
    
    static public function delete($item) {
        $db = Connection::getConnection();
        $result = $db->delete($params, 'mail');
        return $reslt;
    }
    
    static public function find($fields = ['*'], $params = []) {
        $db = Connection::getConnection();
        $params['mail.id'] = 'link.messageId';
        $result = $db->find($fields, $params, 'mail, link');
        ($result->rowCount() == 1) ? $r = $result->fetch(PDO::FETCH_OBJ) : $r = $result->fetchAll(PDO::FETCH_OBJ);
        return $r;
    }
    
}