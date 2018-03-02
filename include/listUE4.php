<?php
// on se connecte à notre base
include('UE.php');
while ($dataUE = $UE->fetch())
{
  ?>
  <div class="blockUE" id="UE<?php echo $dataUE['id']; ?>">
    <div class="titre-UE">
      <?php echo $dataUE['name']; ?>
</div>
      <hr>
    <form class="form-horizontal" action="" method="post">
      <fieldset>
  <?php
  $idUE = $dataUE['id'];
  include('listSubject.php');

  ?>

  </fieldset>
  </form>
  <div class="row end">
  <div class="res col-xs-5 col-xs-offset-1" id="res<?php echo $dataUE['id']?>">
    <span id="moy<?php echo $dataUE['id']?>"></span>
  </div>
  <div class="col-xs-5 col-xs-offset-1">
    <button type="submit" id="calculer<?php echo $dataUE['id']?>" class="btn calculer">Calculer</button>
  </div>
</div>
  </div>
<?php
}
?>
