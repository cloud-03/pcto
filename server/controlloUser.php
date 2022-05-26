<?php
	require "../src/php/database.php";

	$card = $_GET["card"];
	$cestino = $_GET["cestino"];

	$query = "SELECT COUNT(*) AS i, id FROM utente u,possiede p WHERE u.card = '.$card.' AND p.idCestino = '.$cestino.' AND p.idUtente = u.id";

	$check = $pdo->prepare($query);
  $check->execute();
  
  $row = $check->fetch(0);

  if($row["i"] == 1)
  	echo $row["id"];
  else
  	echo 0;
?>