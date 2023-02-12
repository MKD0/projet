<?php
require_once('db.php');




function getUsers()
{
  global $connexion;
  $sql = "SELECT * FROM user as u,profil as p where u.idProfil=p.id ";
  return $connexion->query($sql)->fetchAll();
}
function getUserById($id)
{
  global $connexion;
  $sql = "SELECT * FROM user where idU=$id ";
  return $connexion->query($sql)->fetch();
}


function modifierUser($id, $nom, $prenom, $email, $mdp, $telephone, $idProfil, $login, $description)
{
  global $connexion;
  $sql = "UPDATE user set nom=:nom,prenom=:prenom,email=:email,mdp=:mdp,telephone=:telephone,
      idProfil=:idProfil,login=:login,description=:description WHERE idU=:id";
  $state = $connexion->prepare($sql);
  $state->bindValue("id", $id, PDO::PARAM_INT);
  $state->bindValue("nom", $nom, PDO::PARAM_STR);
  $state->bindValue("prenom", $prenom, PDO::PARAM_STR);
  $state->bindValue("email", $email, PDO::PARAM_STR);
  $state->bindValue("mdp", $mdp, PDO::PARAM_STR);
  $state->bindValue("telephone", $telephone, PDO::PARAM_STR);
  $state->bindValue("idProfil", $idProfil, PDO::PARAM_INT);
  $state->bindValue("login", $login, PDO::PARAM_STR);
  $state->bindValue("description", $description, PDO::PARAM_STR);




  return $state->execute();
}






function addUsers($nom, $prenom, $email, $mdp, $telephone, $idProfil, $login, $description, $cv, $photo)
{
  global $connexion;
  $mdp = md5($mdp);
  // $mdp=password_hash($mdp,PASSWORD_DEFAULT);
  //$mdp=sha1($mdp);

  /*
    $sql="INSERT INTO poste(titre,description,datepub,dateCloture,type,publier)
    values('$title','$description','$datepub','$dateCloture','$type',$publier)";
           return $connexion->exec($sql);
    */
  $sql = "INSERT INTO user(nom,prenom,email,mdp,telephone,idProfil,login,description,cv,photo)
    values(:nom,:prenom,:email,:mdp,:telephone,:idProfil,:login,:description,:cv,:photo)";
  $state = $connexion->prepare($sql);
  $state->bindValue("nom", $nom, PDO::PARAM_STR);
  $state->bindValue("prenom", $prenom, PDO::PARAM_STR);
  $state->bindValue("email", $email, PDO::PARAM_STR);
  $state->bindValue("mdp", $mdp, PDO::PARAM_STR);
  $state->bindValue("telephone", $telephone, PDO::PARAM_STR);
  $state->bindValue("idProfil", $idProfil, PDO::PARAM_INT);
  $state->bindValue("login", $login, PDO::PARAM_STR);
  $state->bindValue("description", $description, PDO::PARAM_STR);
  $state->bindValue("cv", $cv, PDO::PARAM_STR);
  $state->bindValue("photo", $photo, PDO::PARAM_STR);

  return $state->execute();
}


function deleteUser($id)
{
  global $connexion;
  $sql = ("DELETE FROM user  where idU = :id");
  $state = $connexion->prepare($sql);
  $state->bindValue("id", $id, PDO::PARAM_INT);
  return $state->execute();
}




function verifconnect($login, $password)
{
  global $connexion;
  $password = md5($password);
  $sql = "SELECT * from  user as u,profil as p where  login=:login and mdp=:mdp AND p.id=u.idProfil";
  $state = $connexion->prepare($sql);
  $state->bindValue("login", $login, PDO::PARAM_STR);
  $state->bindValue("mdp", $password, PDO::PARAM_STR);

  $state->execute();
  return $state->fetch();
}
function gererfile($nfil)
{
  $extvalid = (($nfil == "photo") ? array('.jpeg', '.jpg', '.png', '.gif') : array('.pdf'));
  $maxsize = 20000000;
  $filext = strtolower('.' . pathinfo($_FILES["$nfil"]['name'], PATHINFO_EXTENSION));
  $fsize = $_FILES["$nfil"]['size'];
  $route = "C:/xampp/htdocs/projetgl/upload/";
  if ($fsize <= $maxsize && in_array($filext, $extvalid)) {
    $name = ($nfil == 'photo') ? 'img' : 'cv';
    $name .= date("dmYHi") . $filext;
    $tmp_name = $_FILES["$nfil"]['tmp_name'];
    if (move_uploaded_file($tmp_name, $route . $name)) {
      return $name;
    } else {
      return false;
    }
  }
}

function updateCv($cv)
{
  global $connexion;
  $id = $_SESSION['user'][0];
  $sql = "UPDATE user set cv=:cv where idU=:id";
  $state = $connexion->prepare($sql);
  $state->bindValue("cv", $cv, PDO::PARAM_STR);
  $state->bindValue("id", $id, PDO::PARAM_INT);

  return $state->execute();
}
function RHcount()
{
  global $connexion;
  $sql = "SELECT COUNT(*) FROM user WHERE idProfil=2";
  $res = $connexion->query($sql);
  $count = $res->fetchColumn();
  return $count;
}
function Candidatcount()
{
  global $connexion;
  $sql = "SELECT COUNT(*) FROM user WHERE idProfil=4";
  $res = $connexion->query($sql);
  $count = $res->fetchColumn();
  return $count;
}
function pourcentageRH()
{
  global $connexion;
  $sql = "SELECT COUNT(*) FROM user";
  $res = $connexion->query($sql);
  $compteur = $res->fetchColumn();
  $count = RHcount();
  $pourcentRH = ($count / $compteur) * 100;
  return round($pourcentRH);
}
function pourcentageCandidat()
{
  global $connexion;
  $sql = "SELECT COUNT(*) FROM user";
  $res = $connexion->query($sql);
  $compteur = $res->fetchColumn();
  $count = Candidatcount();
  $pourcentcandidat = ($count / $compteur) * 100;
  return round($pourcentcandidat);
}
function changermot_dpass($ancien_mdp, $nouveau_mdp, $confirm_mdp)
{
  global $connexion;
  $ancien_mdp = md5($ancien_mdp);
  $idU = $_SESSION['user'][0];
  $password = $_SESSION['user']['mdp'];
  if ($ancien_mdp == $password) {

    if ($nouveau_mdp == $confirm_mdp) {
      $nouveau_mdp = md5($nouveau_mdp);
      $sql = "UPDATE user set mdp=:mdp where idU=:id";
      $state = $connexion->prepare($sql);
      $state->bindValue("mdp", $nouveau_mdp, PDO::PARAM_STR);
      $state->bindValue("id", $idU, PDO::PARAM_INT);
      return $state->execute();
    }
  }
}



