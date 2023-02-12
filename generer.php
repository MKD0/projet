

<div class="card">
  <div class="card-header">
    Page PDF 
  </div>
  <div class="card-body">
        <button class="btn btn-primary mt-5 float-end" data-bs-toggle="modal" data-bs-target="#ajoutOffre">Ajouter</button><br><br><br>
    

        <table id="datatablesSimple" class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                   
                    <th scope="col">date Publication</th>
                    <th scope="col">date Cloture</th>
                    <th scope="col">Type</th>
                    <th scope="col">Publier</th>
                    <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($mkd as $key => $value) {?>
                    <tr>
                      <th scope="row"> <?php echo $value['id']  ?></th>
                      <td> <?= $value['titre']  ?></td>
                
                      <td><?= $value['datepub']  ?></td>
                      <td><?= $value['dateCloture']  ?></td>
                      <td><?= $value['type']  ?></td>
                      
                      <td>
                        <a href="?id=<?=$value['id']?>&etat=1" class="btn btn-success" <?php  echo $value['publier']==0? 'hidden' :''  ?> ><i class="bi bi-star me-1"></i> Publier</a>
                        <a href="?id=<?=$value['id']?>&etat=0" class="btn btn-danger" <?php  echo $value['publier']==1? 'hidden' :''  ?>  ><i class="bi bi-star me-1"></i> Descativer</a>
                      </td>
                      <td>
                          <button type="button" class="btn btn-secondary"><i class="bi bi-collection"></i></button>
                          <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button>
                          <button type="button" class="btn btn-info"><i class="bi bi-info-circle"></i></button>
                         
                      </td>
                    </tr>

                <?php } ?>
<script> 
window.open();
</script>
                   
                   
                </tbody>
        </table>
  </div>
</div>