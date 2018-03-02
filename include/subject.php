<?php
	try
	{
		include('connexionDB.php');

			$subject = $bdd->query("SELECT * FROM subject WHERE idUE=".$idUE);



	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
?>
