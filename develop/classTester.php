<?php

require_once '../app/model/dictionnary.php';
require_once '../entity/user.php';

$dictionnary = new Dictionnary();
$dictionnary->findAll();
foreach($dictionnary->getList() as $user) {
    echo '<br />'.$user->getName();
}