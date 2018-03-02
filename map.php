<html>
<?php include('include/header.php')?>
<body>


  <div class="blockMap">
<div class="row">
<div class="col-lg-2 col-md-2">
  <div class="row">
    <?php include('include/switchSpe.php')?>
  </div>
</div>
<div class=" col-lg-10 col-md-10" id="map"></div>

</div>
</div>


<script src=js/map2.js></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUt7sPLNAUbLSOJ4-4eY0tAHu9DBBrlCs&callback=initMap"></script>


</body>
</html>
