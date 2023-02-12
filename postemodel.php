<?php
require_once('db.php');



function getPostes(){
    global $connexion;
    $sql="SELECT * FROM poste";
    return $connexion->query($sql)->fetchAll();
}





    function addOffre ($title,$description,$dateCloture,$type,$publier){
        global $connexion;
    $datepub="".date("d-m-Y H:i");
    $publier=($publier=='on'? 1 : 0);
    /*
    $sql="INSERT INTO poste(titre,description,datepub,dateCloture,type,publier)
    values('$title','$description','$datepub','$dateCloture','$type',$publier)";
           return $connexion->exec($sql);
    */
    $sql="INSERT INTO poste(titre,description,datepub,dateCloture,type,publier)
    values(:titre,:description,:datepub,:datecloture,:type,:publier)";
    $state=$connexion->prepare($sql);
    $state->bindValue("titre",$title,PDO::PARAM_STR);
    $state->bindValue("description",$description,PDO::PARAM_STR);
    $state->bindValue("datepub",$datepub,PDO::PARAM_STR);
    $state->bindValue("datecloture",$dateCloture,PDO::PARAM_STR);
    $state->bindValue("type",$type,PDO::PARAM_STR);
    $state->bindValue("publier",$publier,PDO::PARAM_INT);
   

  
        
        
        return $state->execute();
      }
 




function UpdateOffre($idOffre,$etat){
    global $connexion;
    if($etat==0){
        $etat=1;
    }else{
        $etat=0;
    }


$sql=" UPDATE poste set publier=$etat where id=$idOffre";

return $connexion->exec($sql);

}

function getOffrePub(){
    global $connexion;
    $sql="SELECT * FROM poste WHERE publier=1";
    return $connexion->query($sql)->fetchAll();

}
function getOffreByid($id){
    global $connexion;
    $sql="SELECT * FROM poste WHERE id=$id";
    return $connexion->query($sql)->fetch();
  

}




?>