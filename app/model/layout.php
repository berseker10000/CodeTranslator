<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'connect.php';

function getTranslationLayout($userId, $language) {
    $bdd = connectDb();
    $query = $bdd->prepare('SELECT structure.code as layout, traduction.code as translation
                          FROM structure
                          INNER JOIN traduction ON structure.id = traduction.idStructure
                          WHERE (structure.idAuteur = 1 OR structure.idAuteur = :userId) AND traduction.langage = :language');
    $query->execute(array('userId' => $userId,
                          'language' => $language));
    $result = $query->fetchAll();
    return $result;
}
