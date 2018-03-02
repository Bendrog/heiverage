<?php
	try
	{
		include('connexionDB.php');

			$mark = $bdd->query("SELECT * FROM mark WHERE idSubject=".$idSubject);



	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
?>
