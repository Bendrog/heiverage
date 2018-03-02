

  <?php
  	try
  	{
  		include('connexionDB.php');


  			$nbr = $bdd->query('SELECT COUNT(*) AS nbr FROM stath4');



  	}
  	catch (Exception $e)
  	{
  	        die('Erreur : ' . $e->getMessage());
  	}

  $dataCompteur = $nbr->fetch();
echo "<section id=\"compteur\">";
echo $dataCompteur['nbr'];
echo " Moyennes calculées";
echo "</section>";
?>
