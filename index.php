<?php
        session_start();
        ob_start();
        include_once("model/db.php");
        require_once("model/posteModel.php");
        require_once("model/profilModel.php");
        require_once("model/utilisateurModel.php");
        require_once("model/postulerModel.php");
      
       


        require_once("template/header.php");
        require_once("template/navbar.php");
        require_once("template/sidebar.php");
        
       
        if(isset($_GET['idu'],$_GET['page']) and $_GET['page']=="detailOffre" ){
                $id=$_GET['idu'];
                $value=getOffreByid($id);
                require_once("pages/detailOffre.php");
        }
        if(isset($_GET['page'])){
             
        $postes=($_GET['page']=='pageOffreEm')?getPostes():[];
        $postespub=($_GET['page']=='accueil')?getOffrePub():[];
        $profils=($_GET['page']=='profil'||$_GET['page']=='utilisateur'||$_GET['page']=='modifieruser' )?getProfils():[];
        $Users=($_GET['page']=='utilisateur')?getUsers():[];
        $candidats=($_GET['page']=='candidat')?getOffrePub():[];
        $postuler=($_GET['page']=='offrepostuler')?getpostulecandidat():[];
       
        
        }
        
     
             // routeur
        $pages=isset($_GET['page'])?$_GET['page']:"";
        if($pages!=""){
             if(file_exists("pages/$pages.php")){
                     include_once("pages/$pages.php");
             }else{
                     echo "la page n'existe pas";
             }
        }
        if(isset($_POST['modif'])){
                extract($_POST);
                
                $res=modifierUser($idU,$nom,$prenom,$email,$mdp,$telephone,$idProfil,$login,$description);
                if($res==1){
                        header("location:http://localhost/projetgl/index.php?page=utilisateur");
                }else{
                        echo "Erreur insertion à la BD";
                }

        }
      
  
        
        if(isset($_POST['ajoutOffre'])){
                extract($_POST);
                $res=addOffre($titre,$description,$dateCloture,$type,$publier);
                if($res==1){
                        header("location:http://localhost/projetgl/index.php?page=pageOffreEm");
                }else{
                        echo "Erreur insertion à la BD";
                }

        }
        if(isset($_POST['download'])){
                extract($_POST);
                $cv=gererfile("cv");
                if($cv!=false){
                        $res= updateCv($cv);
                        if($res==1){
                                header("location:http://localhost/projetgl/index.php?page=pageprofil");
                        }else{
                                echo "Erreur insertion à la BD";
                        }
                }
              

        }


        

        
        if(isset($_GET['page']) and $_GET['page']=="generer"){

                generer_pdf();
                
        }
        else {
                $mkd=getPoste();
                require_once('pages/pageOffreEm');
              }

       




        if(isset($_POST['ajoutProfil'])){
                extract($_POST);
                $res=addProfil($libelle);
                if($res==1){
                        header("location:http://localhost/projetgl/index.php?page=profil");
                }else{
                        echo "Erreur insertion à la BD";
                }

        }
        if(isset($_POST['ajoutUsers'])){
                extract($_POST);
                $photo = gererfile("photo");
                $cv = gererfile("cv");
                if($photo!=false && $cv !=false){
                        $res=addUsers($nom,$prenom,$email,$mdp,$telephone,$idProfil,$login,$description,$cv,$photo);
                        if($res==1){
                                header("location:http://localhost/projetgl/index.php?page=connexion");
                        }else{
                                echo "Erreur insertion à la BD";
                        }
                }

               
        }
        if(isset($_POST['inscrire'])){
                extract($_POST);
                $photo = gererfile("photo");
                $cv = gererfile("cv");
                if($photo!=false && $cv !=false){
                        $res=addUsers($nom,$prenom,$email,$mdp,$telephone,$idProfil,$login,$description,$cv,$photo);
                        if($res==1){
                                header("location:http://localhost/projetgl/index.php?page=connexion");
                        }else{
                                echo "Erreur insertion à la BD";
                        }
                }

        }
        if(isset($_POST['verifconnexion'])){
                extract($_POST);
                $res=verifconnect($login,$password);
                if($res){
                        $_SESSION["user"]=$res;
                        header("location:http://localhost/projetgl/index.php?page=accueil");
                }else{
                        $messageConnect="login ou mot de passe incorrect";
                }
                

        }
        if(isset($_GET['page']) && $_GET['page']=="deconnexion"){
                $_SESSION=[];
                session_destroy();
                header("location:http://localhost/projetgl/index.php?page=connexion");
        }

        
    if(isset($_GET['ids']) ){
        $id=$_GET['ids'];
        deleteUser($id);
        header("location:http://localhost/projetgl/index.php?page=utilisateur");
        }
        
        
        








        if(isset($_POST['changepass'])){
                extract($_POST);
                $res=changermot_dpass($ancien_mdp,$nouveau_mdp,$confirm_mdp);
                if($res==1){
                        $_SESSION=[];
                        session_destroy();
                        header("location:http://localhost/projetgl/index.php?page=connexion");
                }
                
                else{
                        echo "erreur a la base";
                }

        }
        if(isset($_GET['idv'] )AND ($_GET['p'])){
                if($_GET['p']=='offrepostule'){
                        $ido=$_GET['idv'];
                        $res=addpostule($ido);
                        if($res==1){
                                header("location:http://localhost/projetgl/index.php?page=offrepostuler");
                        }
                        else{
                                echo "erreur a la base";
                        }
                }
        }
        
    

                   
     
    
          
       
     /*


        if(isset($_GET['page'])){
                if($_GET['page']=="gestionOffre"){
                        $postes=getPostes();
                        require_once("pages/pageOffreEm.php");
                }
                if($_GET['page']=="utilisateur"){
                       
                        require_once("pages/utilisateur.php");
                }
                if($_GET['page']=="profil"){
                        $postes=getPostes();
                        require_once("pages/profil.php");
                }
        
        */
       
     
        if(isset($_GET['idu'],$_GET['etat'],$_GET['idP'])){
                $id=$_GET['idu'];
                $idP = $_GET['idP'];
                $etat=$_GET['etat'];
                $res=gerer($idP,$etat);
                if($res==1){
                        $value=getOffreByid($id);
                        require_once('pages/detailOffre.php');
                }else{
                        echo "Erreur insertion à la BD";
                }
        }
     
        

       


         
       
                 
        
       
        
       
          

     
       

       











        require_once("template/footer.php");




?>