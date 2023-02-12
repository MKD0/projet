<div class="row">
   <?php foreach ($postespub as $key => $value) {?>
  <div class="card col-md-3">
  <div class="card-header">
  <?= $value['titre']?>
  </div>
  <div class="card-body">
  TITRE:<?= $value['titre']?><br><br>
  DATEPUBLICATION:<?= $value['datepub']?><br>

    <a href="?idu=<?=$value['id']?>&page=detailOffre"class="btn btn-primary">Detail</a>
  </div>
</div>
<?php }?>
</div>



