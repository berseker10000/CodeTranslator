<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function translation($code, $layout) {
    foreach($layout as $currentLayout) {
        $code = preg_replace($currentLayout['layout'], $currentLayout['translation'], $code);
    }
    
    return $code;
}

function convertType($code, $language) {
    
    $typeLayout = array("#entier#i", "#caract(e|è)re#i", "#bool(é|e)en#i", "#cha(i|î)ne#i", "#r(é|e)el#i");
    switch($language) {
        case "c":
            $typeTranslation = array("int", "char", "bool", "string", "float");
            break;
        case "javascript":
            $typeTranslation = array('var', 'var', 'var','var', 'var');
            break;
        case "python":
            $typeTranslation = array('', '', '', '', '');
            break;
        case "java":
            $typeTranslation = array("Int", "Char", "bool", "String", "Float");
            break;
        case "php":
            $typeTranslation = array("", "", "", "", "");
        default:
            $typeTranslation = array("", "", "", "", "");
    }
    if($language != "python") {
        $code =preg_replace($typeLayout, $typeTranslation,$code);
        $code =preg_replace("#(\r\n)#", ";\r\n", $code."\r\n");
        $code =preg_replace("#(\{|\});#", "$1", $code);
    }
    return $code;
}

function extracting($code) {
    foreach($code as &$c) {
        $content = preg_match('#d(é|e)but(.|\s|\r)+fin#iU', $c['contenu']);
        $i = 0;
        while($i < 100) {
            echo $content[$i];
            $i++;
        }
    }
}