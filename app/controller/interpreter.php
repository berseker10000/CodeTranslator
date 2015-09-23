<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function interpreting($data) {
    $patterns = array();
    $remplacements = array();
    $patterns[0] =      '#(\$motClef|\$motCl(é|e))#i';
    $remplacements[0] = '\s(algorithme|procedure|fonction|si|sinon|fin_?si|tant_?que|fin_?tant_?que|selon|autrement|'
            .           'fin_?selon|pour|fin_?pour|et|ou|mod|div)\s';
    
    $patterns[1] =      '#\$variable#i';
    $remplacements[1] = '(\w+) ?';
    
    $patterns[2] =      '#\$op(é|e)rateur#i';
    $remplacements[2] = '(\+|\-|\/|\*|\sdiv\s|\smod\s)';
    
    $patterns[3]=       '#\$tout#i';
    $remplacements[3]=  '(.*)';
    
    $patterns[4] =      '#\$entier#i';
    $remplacements[4]=  '(-?[0-9]+\s)';
    
    $patterns[5]=       '#\$reel#';
    $remplacements[5]=  '[\-\+]?[0-9]*(\.[0-9]+)?';
    
    $patterns[6] =      '#\$caract(e|è)re#';
    $remplacements[6]=  "(\'\w\')";
    
    $patterns[7]=       '#cha(i|î)ne#';
    $remplacements[7]=  '(\"(.*)\")';
    
    $patterns[8]=       '#\$bool(é|e)en#';
    $remplacements[8]=  '(vrai|faux)';
    
    $patterns[9]=       '#\$type#';
    $remplacements[9]=  '\s(entier|r(é|e)el|caract(e|è)re|cha(i|î)ne|bool(é|e)en)\s';
    
    $patterns[10]=      '#\$relation#';
    $remplacements[10]= '(==|\<|\>|\<=|\>=|\!=)';
    
    $patterns[11]=      '#\$logique#';
    $remplacements[12]=      '\s(et|ou|ouex|non)\s';
    


    foreach($data as &$currentValue) {
        $currentValue['layout'] = preg_replace($patterns, $remplacements, $currentValue['layout']);
        $currentValue['layout'] = '#'.$currentValue['layout'].'#iU';
    }
    return $data;
}

