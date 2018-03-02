<?php
function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

		include('connexionDB.php');

$spe=  $_GET['spe'];

if ($spe<20 && $spe>0){

// Select all the rows in the markers table
$result = $bdd->prepare("SELECT * FROM map_univ INNER JOIN map_spe ON map_univ.idSpe = map_spe.id WHERE map_univ.idSpe=?");

$result->execute(array($spe));


if (!$result) {
  die('Invalid query: ' . mysql_error());
}
header("Content-type: text/xml");

echo '<markers>';


// Iterate through the rows, adding XML nodes for each
while ($row = $result->fetch()){
  // Add to XML document node
  echo '<marker ';
    echo 'Name="' . parseToXML($row['Name']). '" ';
    echo 'Country="' . parseToXML($row['Country']) . '" ';
    echo 'nbSemester="' . $row['nbSemester'] . '" ';
    echo 'Spe="' . $row['name'] . '" ';
		echo 'lat="' . $row['lat'] . '" ';
		echo 'lng="' . $row['lng'] . '" ';
		echo 'idUniv="' . $row['idUniv'] . '" ';
		echo 'remark="' . $row['remark'] . '" ';
    echo '/>';
}

echo '</markers>';


}

?>
