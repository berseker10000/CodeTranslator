<?php

namespace Ptut\App\Controler;

class Session {
    // instance de la classe
    private static $_instance;

    // Un constructeur privé ; empêche la création directe d'objet
    private function __construct() {
        session_start();
    }

    public static function getSession() 
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new Session();
        }
        return self::$_instance;
    }

    static public function setMsg($type, $msg) {
        $_SESSION['flash'][$type] = $msg;
    }
    
    static public function getMsg() {
        return $_SESSION['flash'];
    }
}
