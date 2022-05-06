<?php
	echo "Variabili di sessione eliminate";
	
	session_start();
	session_unset();  //elimina il valore di tutte le session
	session_destroy(); //elimina	

	header('Location: ../../pages/login.php');
?>