

<div class="card">
   <?php if(empty($_SESSION)||$_SESSION['user']['libelle']=='CANDIDAT') { 
     $ido = $value['id'];
     $idu = $_SESSION['user'][0];
     $resultat = gereronpos($ido,$idu);
    ?>
    
        <div class="card-header">
        <?= $value['titre']?>
        </div>
        <div class="card-body">
            <?= $value['titre']  ?>
            <?= $value['datepub']  ?>
            <?php if($resultat){ ?>

              Dossier : <?php 
                 switch($resultat['etat']){
                  case 1: echo "en attente";
                  break;
                  case 2: echo "accepter";
                  break;
                  default:echo"refuser";
                }
                
                ?>
            <?php } else { ?>
               <a class="btn btn-primary" href="?idv=<?=$value['id']?>&p=offrepostule">Postuler</a>
            <?php } ?>
        </div>
        <?php }  ?>

  <?php
  if( $_SESSION['user']['libelle'] =='RH'){
    $ido=$_GET['idu'];
    $h=selectoffre($ido);
        ?>

  <div class="card">
  <div class="card-header">
    Page RH
  </div>
  <div class="card-body">
        <button class="btn btn-primary mt-5 float-end" data-bs-toggle="modal" data-bs-target="#ajoutOffre">Ajouter</button>
        <table id="datatablesSimple" class="table table-striped">
                <thead>
                    <tr>
                  
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Type</th>
                    <th scope="col">C.v</th>
                    <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($h as $key => $v) { ?>
                    <tr>
                  
                      <td> <?= $v['nom']  ?></td>
                      <td><?= $v['prenom']  ?></td>
                      <td><?= $v['titre']  ?></td>
                      <td><?= $v['type']  ?></td>
                      <td><a href="upload/<?=$v['cv']?>"><?=$v['cv']?></a></td>
                    
                      <td>
                        <?php switch($v['etat']){
                            case 1: echo "en attente";
                            break;
                            case 2: echo "accepter";
                            break;
                            default:echo"refuser";

                        }?>
                        </td>
                        <td>
                        <a href="?idu=<?=$value['id']?>&idP=<?=$v[0]?>&etat=1"  class="btn btn-primary">En attente</a>
                        <a href="?idu=<?=$value['id']?>&idP=<?=$v[0]?>&etat=2" class="btn btn-primary">Accepter</a>
                        <a href="?idu=<?=$value['id']?>&idP=<?=$v[0]?>&etat=3"  class="btn btn-danger">Refuser</a>
                         </td>
                         
                      
                    </tr>

                <?php } ?>

                   
                   
                </tbody>
        </table>
  </div>
</div>
<?php } ?>



        </div>
    
        
        
        