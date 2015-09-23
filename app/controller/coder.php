<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../modele/functionSeeker.php';
include_once '../modele/layout.php';
include_once '../controleur/translator.php';
include_once '../controleur/interpreter.php';


if(isset($_POST['editor'])) {
    $langage = $_POST['langage'];
    $structure = getTranslationLayout(1, $langage);
    $structure = interpreting($structure);
    $codeComplet = '';
    if(isset($_POST['userFonction'])) {
       $listeFonction = $_POST['userFonction'];
    
        foreach ($listeFonction as $l) {
            $c = functionSeeker($l);
            $codeComplet = $codeComplet.$c[0]['contenu'];
        } 
    }
    
    
    
    $currentCode = translation($codeComplet, $structure);
    $currentCode = convertType($currentCode, $langage);
    echo nl2br($currentCode);
}