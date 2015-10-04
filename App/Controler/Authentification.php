<?php

namespace Ptut\App\Controler;

class Authentification {
    
    static function generateToken() {
        $alphabet = 'azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789';
        $alphabet = str_repeat($alphabet, 255);
        $alphabet = str_shuffle($alphabet);
        return substr($alphabet, 0, 255);
    }
    
}