<html>
<?php include('include/header.php')?>
<!--Cher ami developpeur, bienvenue dans le code !
Ne sois pas étonné de lire des choses très peu optimisées, mal faites ou ne respectant pas les bonnes pratiques !
Je suis encore débutant, n'hésite pas à me contacter (mes coordonnées dans le footeur) pour toutes suggestions sur l'optimisation de ce code. Je t'en serai très reconnaissant.
Sur ce je vous souhaite une agréable lecture
-->
<body >
<?php include('include/title.php')?>
<h3>
  Bienvenue sur HEIVERAGE, le site qui calcule tes moyennes !
  <br>
  <br>
  ( il y a même une map askip )
</h3>
<div class="buttons">
  <hr>
<div class="row">

<div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2">
  <a href="spe.php">
    <button type="button"  class="btnAnnee btnMenu  btn">MOYENNES H4</button>
  </a>
</div>
<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1">
<a href="map.php">
    <button type="button" class="btnAnnee btnMenu btn ">MAP  <i class="fa fa-globe" aria-hidden="true"></i></button>
  </a>
</div>



</div>
</div>
<div class="row">
<div class='col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2'>
<section id="compteur">


&nbsp;Moyennes calculées

</section>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


<script
      src="js/app.js">
</script>

<script
      src="js/ShowMeTheNumber.js">
</script>
</body>
</html>
