<?php
    require "database.php";
    
    $nome = $_GET["firstname"];
    $cognome = $_GET["lastname"];
    $password = $_GET["pwd"];
    $email = $_GET["email"];    
    
    $query = "INSERT INTO utente(nome, cognome, email, pwd) VALUES ('$nome', '$cognome','$email','$password');";
    
    $rs = mysqli_query($con, $query);
?> 