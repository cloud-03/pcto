<?php
    require "../src/php/database.php";

    
    $user = $_GET["utente"];
    $cestino = $_GET["cestino"];
    $peso = $_GET["peso"];
    
    $currentDate = new DateTime();
    
    $today = $currentDate->format('Y-m-d H:i:s');

    
    $query = "INSERT INTO buttare(orario, idUtente, idCestino, peso) VALUES ('$today', '$user','$cestino','$peso');";

    $rs = mysqli_query($con, $query);
    ?>