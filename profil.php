
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="ajoutProfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulaire Ajout profil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form method="POST">
      <div class="modal-body">
      <label for="">libelle</label>
      <input type="text" name="libelle" class="form-control">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary" name="ajoutProfil">Ajouter</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="card">
<div class="card-header">
page offre
</div>
<div class="card-body">
        <button class="btn btn-primary mt-5 float-end  "data-bs-toggle="modal" data-bs-target="#ajoutProfil">Ajouter</button>
<table id="datatablesSimple" class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">libelle</th>
                   
                    <th scope="col">Options</th>

                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    
                    <?php foreach($profils as $key=>$value){?>
                        <tr>
                    <th scope="row"><?php echo $value['id']?></th>
                    <td><?= $value['libelle']?></td>
                  
                    <td>
              <button type="button" class="btn btn-primary">modifier</button>
              <button type="button" class="btn btn-danger">supprimer</button>
            
         
                    </td>
                    </tr>
                    <?php } ?>
                    
                   
                </tbody>
        </table>
</div>
</div>

