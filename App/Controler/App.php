<?php

namespace Ptut\App\Controler;

class App {

    static public function getSession() {
        return Session::getSession(); 
    }
    
    static public function setMsg($type, $msg) {
        Session::setMsg($type, $msg);
    }
    
    static public function getMsg() {
        return Session::getMsg();
    }
    
}