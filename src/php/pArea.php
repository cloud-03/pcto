<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserved area</title>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cestino";

$id = $_POST["id"];
?>
<body>
    <div class="wrapper">
        <img src="../img/logo" alt="logo">
        <img src="../img/user.png" alt="user">
        <?php
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT nome, cognome FROM utente WHERE id='$id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($info = mysqli_fetch_assoc($result)) {
            echo "Ciaio, " . $row["nome"] . $row["cognome"]. "<br>";
        }
        } else {
        echo "0 results";
        }

        mysqli_close($conn);
        ?>
    </div>
</body>
</html>