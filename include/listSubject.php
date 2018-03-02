
<?php
// on se connecte à notre base

include('subject.php');
while ($dataSubject = $subject->fetch())
{?>

        <div class="row subject">
          <label class="col-md-4 col-xs-6   control-label" for="name">
            <?php echo $dataSubject['name']; ?>
          </label>
          <div class="col-md-8 col-xs-6">

          <?php
          // on se connecte à notre base
          $idSubject = $dataSubject['id'];
          include('mark.php');
          while ($dataMark = $mark->fetch())
          {
            $idchamp = $dataMark['id']
            ?>
            <div class="row">
          <div class="col-md-6 col-xs-5 left">
            <input name="name" <?php
if( isset( $_COOKIE[$idchamp]  ) )
{ echo "value=\"$_COOKIE[$idchamp]\"";} ?>

id="<?php echo $dataMark['id']?>"
type="number" min="0" max="20"
placeholder="<?php echo $dataMark['coef']?>%"
class="form-control left">
          </div>

          <div class="col-md-6 col-xs-7 left ">
            <b>(<?php echo $dataMark['name']?>)</b>
          </div>
        </div>
          <?php
          }

          $mark->closeCursor(); // Termine le traitement de la requête

          ?>
</div>
        </div>


<?php
}

$subject->closeCursor(); // Termine le traitement de la requête

?>
