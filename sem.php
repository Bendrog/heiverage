<html>
<?php include('include/header.php')?>
<body>

  <?php include('include/title.php')?>
  <h3>
    Choisis ton semestre :
  </h3>
<div class="buttons">
  <hr>
<div class="row">

<div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2">
  <a href="main.php?sem=1&spe=<?php $spe = $_GET['spe']; echo $spe;?>">
    <button type="button"  class="btnAnnee btnMenu  btn">Semestre 1</button>
  </a>
</div>
<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1">
<a href="main.php?sem=2&spe=<?php $spe = $_GET['spe']; echo $spe;?>">
    <button type="button" class="btnAnnee btnMenu btn ">Semestre 2</button>
  </a>
</div>
<hr>
</div>
</div>



</body>
</html>
