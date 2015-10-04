<?php

namespace Ptut\App\Controler;

use \PDO;

class Translator {
    
    static public function translate($code, $language) {
        
        $converters = \Ptut\App\Model\Connection::getConnection()->query(""
                . "Select layout.code as layout, translation.code as translation "
                . "from layout, translation "
                . "where layout.id = translation.layoutId and translation.language = (?)", [$language]);
        $converters = $converters->fetchAll(PDO::FETCH_OBJ);
        foreach($converters as $converter) {
            $converter->layout = Translator::interpret($converter->layout);
            //debug($converter->layout);
        }
        foreach($converters as $converter) {
            $code = preg_replace($converter->layout, $converter->translation, $code);
        }
        //$code = preg_replace('#(^|\n)(?!/{3})(.*)\n#m', "Erreur de syntaxe\n", $code);
        //$code = preg_replace('#///#m', '', $code);
        return $code;
    }
    
    static private function interpret($layout) {
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
        $remplacements[4]=  '(-?[0-9]+)';

        $patterns[5]=       '#\$reel#';
        $remplacements[5]=  '[\-\+]?[0-9]*(\.[0-9]+)?';

        $patterns[6] =      '#\$caract(e|è)re#';
        $remplacements[6]=  "(\'\w\')";

        $patterns[7]=       '#$cha(i|î)ne#';
        $remplacements[7]=  '(\"(.*)\")';

        $patterns[8]=       '#\$bool(é|e)en#';
        $remplacements[8]=  '(vrai|faux|true|false)';

        $patterns[9]=       '#\$type#';
        $remplacements[9]=  '\s(entier|r(é|e)el|caract(e|è)re|cha(i|î)ne|bool(é|e)en)\s';

        $patterns[10]=      '#\$relation#';
        $remplacements[10]= '(==|\<|\>|\<=|\>=|\!=)';

        $patterns[11]=      '#\$logique#';
        $remplacements[12]=      '\s(et|ou|ouex|non)\s';



        $layout = preg_replace($patterns, $remplacements, $layout);
        $layout = '#'.$layout.'#iU';
        
        return $layout;
    }
    
    static public function layOut($code) {
        
        $c = $code;
        
        $c = preg_replace('#\[indent\]#', '<br /><p class="indent">', $c);
        $c = preg_replace('#\[\/indent\]#', '</p>', $c);
        
        $c = preg_replace('#\"\>\<br \/\>#m', '">', nl2br($c));
        
        return $c;
        
        
    }
    
    
}

/*

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
*/