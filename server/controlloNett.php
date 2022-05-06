<?php
	require "../src/php/database.php";

	$card = $_GET["card"];

	$query = "SELECT COUNT(*) AS i, id FROM netturbino WHERE card = '".$card."';";

	$check = $pdo->prepare($query);
  $check->execute();
  
  $row = $check->fetch(0);

  if($row["i"] == 1)
  	echo $row["id"];
  else
  	echo 0;
?>