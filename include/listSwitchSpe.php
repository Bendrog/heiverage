<?php
	try
	{
		include('connexionDB.php');


			$SwitchSpe = $bdd->prepare('SELECT * FROM map_spe');
			$SwitchSpe->execute(array());


	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
?>
