<?php
include('connexionDB.php');

function afficher_produit($cnx){
    $sql = " SELECT * FROM produit";
    $result = mysqli_query($cnx,$sql);
    return $result;
}








