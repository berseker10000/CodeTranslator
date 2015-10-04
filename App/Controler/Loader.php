<?php

/**
 * Classe Loader, permet de charger dynamiquement les classes
 */
class Loader {
    
    static function register() {
        spl_autoload_register(array(__CLASS__, 'load'));
    }
    
    static public function load($class) {
        
        if(strpos($class, "Ptut\\") === 0) {
        
        $dir = $_SERVER['DOCUMENT_ROOT'];
        $class = str_replace("Ptut\\", '/CodeLeFort/', $class);
        $class = str_replace('\\', '/', $class);
        require $dir.''.$class.'.php';
        
        }
    }
    
}

function debug($var) {
    echo '<pre>'.print_r($var).'</pre>';
}