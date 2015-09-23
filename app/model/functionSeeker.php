<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function functionSeeker($id) {
    include_once 'connect.php';
    $db = connectDb();
    $query = $db->prepare('Select nom, contenu, type from fonction where id = :id');
    $query->execute(array('id' => $id));
    $result = $query->fetchAll();
    $query->closeCursor();
    return $result;
}

function userFunction($idUser) {
    include_once 'connect.php';
    $db = connectDb();
    $query = $db->prepare('Select * from fonction where idAuteur = :idAuteur');
    $query->execute(array('idAuteur' => $idUser));
    $resultat = $query->fetchAll();
    $query->closeCursor();
    return $resultat;
}