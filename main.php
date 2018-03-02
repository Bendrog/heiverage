<html>
<?php include('include/header.php')?>

<body>
  <div class="container">

  <?php include('include/title.php')?>
<h2>
  <?php echo $_GET['spe'];?> - SEMESTRE <?php echo $_GET['sem'];?>
</h2>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">

        <?php
        //On choisit le parcours selon la fillière
if ($_GET['spe']=="PCE" OR $_GET['spe']=="BAA" OR $_GET['spe']=="IMS" OR $_GET['spe']=="BTP"){

        if ($_GET['sem']=="1"){
          $sem="4S2";
          $hum="5HUM1";
          }
        if ($_GET['sem']=="2"){
          $sem="4S1";
          $hum="5HUM2";
        }

        }
if ($_GET['spe']=="ITI" OR $_GET['spe']=="ESEA" OR $_GET['spe']=="TIMTEX"  OR $_GET['spe']=="CM"){
        if ($_GET['sem']=="1"){
                  $sem="4S1";
                  $hum="5HUM1";
                  }
        if ($_GET['sem']=="2"){
                  $sem="4S2";
                  $hum="5HUM2";
                }

                }
if ($_GET['spe']=="SC"){
        if ($_GET['sem']=="1"){
                  $sem="4SC1";
                  $hum="5HUM1";
                }
        if ($_GET['sem']=="2"){
                  $sem="4SC2";
                  $hum="5HUM2";
                }

                }

        $spe=  $_GET['spe'].$_GET['sem'];


        include('include/listUE4.php');

?>

      </div>
    </div>
  </div>
<?php
    include('include/footer.php');
?>

    <script
          src="js/script.js">
    </script>

</body>

</html>
