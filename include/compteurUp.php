<?php
if( isset($_POST['idBlock']) && isset($_POST['moy']) ){

try
{
  include('connexionDB.php');

$idblock = (int)$_POST['idBlock'];
$moy = doubleval($_POST['moy']);
if ($moy <= 20 && $moy >= 0)

{
  $UP = $bdd->prepare('INSERT INTO stath4 (idBlock,moy,date)
  VALUES (?,?,NOW())');
  $UP->execute(array($idblock,$moy));
}
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
}
 ?>
