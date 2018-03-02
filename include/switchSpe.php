
<?php
include('listSwitchSpe.php');
while ($dataSwitchSpe = $SwitchSpe->fetch())
{
  ?>

  <div class="switchbox col-lg-8 col-lg-offset-2">
    <div class="switchSpe"><?php echo $dataSwitchSpe['name']; ?> </div>
    <div class="switch">
      <input id="<?php echo $dataSwitchSpe['id']; ?>" class="cmn-toggle cmn-toggle-round-flat" type="checkbox">
      <label for="<?php echo $dataSwitchSpe['id'];?>"></label>
    </div>
  </div>
<?php
}
?>
<div class="col-lg-8 col-lg-offset-2">
<a href="index.php">
<button type="button"  class="btn back  btn-primary ">
  <i class="fa fa-arrow-left" aria-hidden="true"></i> Retour
</button>
</a>
</div>
