<?php
    $userId = 1;
    include_once '../modele/functionSeeker.php';
    $userFunctions = userFunction($userId);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Encodeur de Pseudo Code</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <nav>
        <div class="navigator">
        <a href="../index.php">ACCUEIL</a>
        <a href="#">TUTORIAL</a>
        <a href="#">PROGRESSER</a>
        <a href="#" class="courant">CODER</a>
        <a href="#">TELECHARGER</a>
        <a href="#">MES OUTILS</a>
        </div>
        <div class="userArea">
            <table>
                <tr><td><p class="infos">0 point gagné</p></td><td rowspan="2"><p>pseudo</p></td></tr>
                <tr><td><p class="infos">0 message reçu</p></td></tr>
            </table>
        </div>
        <div style="clear:both"></div>
    </nav>

     <form action="../controleur/coder.php" method="POST">
    <div id="coderContainer">
            <div id="coderHeader">
                <a href="#"><img src="../css/pictures/new.png" alt="Nouveau Fichier" title="Nouveau Fichier"/></a>
                <a href="#"><img src="../css/pictures/open.png" alt="Ouvrir" title="Ouvrir"/></a>
                <a href="#"><img src="../css/pictures/save.png" alt="Enregistrer" title="Enregistrer"/></a>
                <a href="#"><img src="../css/pictures/backup.png" alt="Récupération" title="Récupérer une ancienne version"/></a>
                <a href="#"><img src="../css/pictures/help.png" alt="Demander de l'aide" title="Demander de l'aide"/></a>
                <a href="#"><img src="../css/pictures/share.png" alt="Partager" title="Partager votre algorithme" alt=""/></a>
                <a href="#"><img src="../css/pictures/layout.png" alt="Gérer les structures de traduction" title="Gérer les structures de traduction"/></a>
                <input type="text" class="functionName" placeholder="FONCTION(type parametre)"/>
                <input type="text" class="typeReturn" placeholder="TYPE RETOURNE"/>
            </div>
            <div id="coderCorps">
                <div class="coderMenu">
                    
                    <input type="radio" name="langage" id="c" value="c" checked><label for="c">C</label><input type="radio" name="langage" id="java" value="java"><label for="java">Java</label><input type="radio" name="langage" id="javascript" value="javascript"><label for="javascript">JavaScript</label><input type="radio" name="langage" id="python" value="python"><label for="python">Python</label><input type="radio" name="langage" id="php" value="php"><label for="php">Php</label><input type="radio" name="langage" id="executer" value="executer"><label for="executer">Executer</label>
                    <div style="clear:both"></div>
                </div>   
                <textarea id="editor" rows="30" spellcheck="false" name="editor"></textarea>
            </div>
            <div id="functionCorps">
                <div class="coderMenu">
                    <a href="#" class="actif">Mes Fonctions</a><a href="#">Fonctions Publiques</a>
                </div>
                 <div id="userFunction">
                <table>
                    <?php 
                    foreach ($userFunctions as $function) {
                        echo "<tr><td>".$function['nom'].$function['type'].'</td><td><input type="checkbox" name="userFonction[]" value="'.$function['id'].'"></td></tr>';
                    }
                    ?>
                </table>
            </div>
            </div>
            <div style="clear:both"></div>
           
    
        </div>

    <button  id="launch" name="submit">&lsaquo;/&rsaquo;</button>
    </form>
</body>
</html>
