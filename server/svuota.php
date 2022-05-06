<?php
	require "../src/php/database.php";

	$user = $_GET["utente"];
  $cestino = $_GET["cestino"];

	$currentDate = new DateTime();
    
  $today = $currentDate->format('Y-m-d H:i:s');
    
  $query = "INSERT INTO svuota(orario, idNetturbino, idCestino) VALUES ('$today', '$user','$cestino');";

  $check = $pdo->prepare($query);
  $check->execute();
?>