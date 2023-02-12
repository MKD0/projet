<?php
require_once("db.php");


function addpostule($ido){
    global $connexion;
    $idu=$_SESSION['user'][0];
    $etat=1;
    $sql="INSERT INTO postuler(idu,ido,etat)
    values(:idu,:ido,:etat)";
    
    $state=$connexion->prepare($sql);
    $state->bindValue("idu",$idu,PDO::PARAM_INT);
    $state->bindValue("ido",$ido,PDO::PARAM_INT);
    $state->bindValue("etat",$etat,PDO::PARAM_INT);
    return $state->execute();

}
function getpostulecandidat(){
    global $connexion;
    $idu = $_SESSION['user'][0];
    $sql="SELECT * FROM postuler as P,poste as o where P.ido=o.id and P.idu=$idu";
    return $connexion->query($sql)->fetchAll();
}

function selectoffre($ido){
    global $connexion;
    $sql="SELECT * FROM postuler as P,user as u,poste as o where P.ido=$ido and P.idu=u.idU and P.ido=o.id";
    return $connexion->query($sql)->fetchAll();

}

function gerer($idP,$etat){
    global $connexion;
    $sql="UPDATE postuler set etat=$etat where idP=$idP";
    return $connexion->exec($sql);
}
function gereronpos($ido,$idu){
    global $connexion;
    $sql="SELECT * FROM postuler where ido=$ido and idu=$idu";
    return $connexion->query($sql)->fetch();
   
}


 
?>