<?php
require_once 'App/Controler/Loader.php';
Loader::register();
use \Ptut\App\Model\LayoutCollection;


require_once 'App/View/Header.php';

if(isset($_GET['p'])) {
    require 'App/View/'.htmlentities($_GET['p']).'.php';
        
}

require_once 'App/View/Footer.php'; ?>