<?php
require_once('db.php');



function getProfils(){
    global $connexion;
    $sql="SELECT * FROM profil";
    return $connexion->query($sql)->fetchAll();
}

function addProfil ($libelle){
 global $connexion;
$sql="INSERT INTO profil(libelle)
values(:libelle)";
$state=$connexion->prepare($sql);
$state->bindValue("libelle",$libelle,PDO::PARAM_STR);   
    return $state->execute();
  }

  ?>