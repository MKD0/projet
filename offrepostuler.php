


<div class="card">
  <div class="card-header">
    Page offrePostuler
  </div>
  <div class="card-body">
                <tbody>
                <?php foreach ($postuler as $key => $value) {?>
                    <tr>
                      <th scope="row"> <?php echo $value['id']  ?></th>
                      <td> <?= $value['titre']  ?></td>
                      <td><?= $value['type']  ?></td>
                      <td><?= $value['etat']  ?></td>
                      <td>
                       <?php
                       if($value['etat']==1){
                        echo" Demande en cours";
                       }
                       else {
                        if($value['etat']==2){
                            echo" Demande accepter";
                        }
                        else{
                            echo"Demande refuse";
                        }

                       }
                       ?>
                      </td>
                    </tr>

                <?php } ?>

                   
                   
                </tbody>
       
  </div>
</div>