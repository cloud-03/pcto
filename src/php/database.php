<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sito";
    
    $con = mysqli_connect($servername, $username, $password) or die ("non connesso");
    mysqli_select_db($con, $dbname) or die ("non selezionato");
?>