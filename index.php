<?php
include_once 'modele\layout.php';
include_once 'controleur\interpreter.php';
include_once 'controleur\translator.php';
include_once 'modele\functionSeeker.php';
$structure = getTranslationLayout(1, "javascript");
$structure = interpreting($structure);
$code = functionSeeker(2);


?>
<!DOCTYPE html>
<html>
    <head>
        <title>CodeLeFort</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php foreach($code as $c) {
     echo convertType(translation($c['nom'].' renvoie '.$c['type'], $structure), "javascript");
    $currentCode = (translation($c['contenu'], $structure));
    $currentCode = convertType($currentCode, "javascript");
    //echo nl2br($currentCode);
}
?>
        <div style="width:800px; margin:5%;background-color: black;color:white;border-radius: 5px; height: 450px; padding:5px 10px;font-family: 'Consolas';overflow:auto;border:6px solid #555555;" id="zoneEcriture"></div>
        <script>
            var zoneEcriture = document.getElementById("zoneEcriture");
            <?php echo $currentCode; ?>
        </script>
    </body>
</html>