<?php

require_once '../app/model/container.php';
require_once '../app/model/connection.php';
require_once '../app/model/layoutcollection.php';
require_once '../app/model/dictionnary.php';
require_once '../app/model/translationcollection.php';
require_once '../entity/translation.php';
require_once '../entity/user.php';
require_once '../entity/layout.php';

$layoutCollection = new LayoutCollection();
$layoutCollection->load('public');

$translationCollection = new TranslationCollection();
$translation = new Translation();

$selectedLanguage = 'javascript';
$translation->setLanguage($selectedLanguage);

foreach($layoutCollection->_list as $layout) {
    
    $translation->setLayoutId($layout->getId());
    $translation = $translationCollection->find($translation);
    
    echo $layout->getCode().' ---> '.$translation->getCode().'<br />';
}