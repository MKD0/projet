
<?php
require_once("model/utilisateurmodel.php");
$id=$_GET['id'];
$v=getUserById($id);
?>

            <form method="POST" enctype="multipart/form-data" >
                <input type="text" class="form-control" name="idU" value="<?=$v['idU'] ?>" hidden >
                <label for="">Nom</label>
                <input type="text" class="form-control" name="nom" value="<?=$v['nom'] ?>">
                <label for="">Prenom</label>
                <input type="text" class="form-control" name="prenom"  value="<?=$v['prenom'] ?>" >
                <label for="">email</label>
                <input type="email" class="form-control" name="email" value="<?=$v['email'] ?>">
                <label for="">Login</label>
                <input type="text" class="form-control" name="login" value="<?=$v['login'] ?>">
                <label for="">Mot de pass</label>
                <input type="password"   name="mdp" class="form-control"  value="<?=$v['mdp'] ?>">
                <label for="">telephone</label>
                <input type="number" class="form-control" name="telephone" value="<?=$v['telephone']?>" 
                <label for="">Description</label>
                <textarea name="description" id="" cols="30" rows="10" ><?=$v['description'] ?></textarea>
              
                <label for="">profil</label>
                <select name="idProfil" id="" class="form-control">
                  <?php foreach ($profils as $key => $values){
                    if($v['idProfil'] == $values['id']){ 
                    ?>
                    
                   <option selected  value="<?=$values['id']?>"><?=$values["libelle"]?></option>

                   <?php }  else{ ?>
                        <option selected  value="<?=$values["id"]?>"><?=$values["libelle"]?></option>
                    <?php } } ?>
                </select>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" >Fermer</button>
                  <button type="submit" class="btn btn-primary" name="modif">Modifier</button>
                </div>
            </form>
