
<!-- Modal -->
<div class="modal fade" id="ajoutOffre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulaire Ajout Utilisateur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
            <form method="POST" enctype="multipart/form-data" >
                <label for="">Nom</label>
                <input type="text" class="form-control" name="nom" >
                <label for="">Prenom</label>
                <input type="text" class="form-control" name="prenom" >
                <label for="">email</label>
                <input type="email" class="form-control" name="email">
                <label for="">Login</label>
                <input type="text" class="form-control" name="login">
                <label for="">Mot de pass</label>
                <input type="password"   name="mdp" class="form-control">
                <label for="">telephone</label>
                <input type="number" class="form-control" name="telephone" >
                <label for="">Photo</label>
                <input type="file" class="form-control" name="photo" >
                <label for="">CV</label>
                <input type="file" class="form-control" name="cv" >
                <label for="">Description</label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
              
                <label for="">profil</label>
                <select name="idProfil" id="" class="form-control">
                  <?php foreach ($profils as $key => $v){?>

                   <option value="<?=$v["id"]?>"><?=$v["libelle"]?></option>

                   <?php }?>
                </select>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                  <button  type="submit" class="btn btn-primary"  name="ajoutUsers">Ajouter</button>
                </div>
            </form>
      </div>
   
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    Page User
  </div>
  <div class="card-body">
        <button class="btn btn-primary mt-5 float-end" data-bs-toggle="modal" data-bs-target="#ajoutOffre">Ajouter</button>
        
        <table id="datatablesSimple" class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">login</th>
                    <th scope="col">email</th>
                    <th scope="col">telephone</th>
                    <th scope="col">profil</th>
                    <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($Users as $key => $value) {?>
                    <tr>
                      <th scope="row"> <?php echo $value['0']  ?></th>
                      <td> <?= $value['nom']  ?></td>
                
                      <td><?= $value['prenom']  ?></td>
                      <td><?= $value['login']  ?></td>
                      <td><?= $value['email']  ?></td>
                      <td><?= $value['telephone']  ?></td>
                      <td><?= $value['libelle']  ?></td>
                    
                   
                      <td>
                        <a href="?id=<?=$value[0]?>&page=modifieruser" type="submit" class="btn btn-primary">modifier</a>
                        <a href="?ids=<?= $value['idU'] ?>"class="btn btn-danger">supprimer</a>
                       
                         
                      </td>
                    </tr>

                <?php } ?>

                   
                   
                </tbody>
        </table>
  </div>
</div>