<?php
	try
	{
		include('connexionDB.php');
		

			$UE = $bdd->prepare('SELECT * FROM ue WHERE annee=? OR annee=? OR annee=? ORDER BY annee ASC');
			$UE->execute(array($sem,$spe, $hum));


	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
?>
