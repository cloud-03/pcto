<!DOCTYPE html>
<head>
    
    <title>Login</title>
    <link rel="stylesheet" href="../src/css/register.css">
</head>
<body>
    <?php
        require_once ('../src/php/database.php');

        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $rpwd = $_POST['rpassword'];
    ?>
    <form action="regist.php" method="POST" >
        <div class="title">Welcome</div>
        <div class="subtitle">Registrati in pochi semplici passi</div>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $pwdLenght = mb_strlen($pwd);

                if(empty($fname) || empty($lname) || empty($email) || empty($pwd) || empty($rpwd)){
                    echo "<div style='color: red;''>Dati non conformi</div>";
                }
                else if($pwd != $rpwd){
                    echo "<div style='color: red;''>Password non corrispondenti</div>";
                }
                else if($pwdLenght < 5 || $pwdLenght > 15){
                    echo "<div style='color: red;'>La password deve essere di minimo 5 e massimo 15</div>";
                }
                else{
                    $password_hash = password_hash($pwd, PASSWORD_DEFAULT);

                    $query = '
                        SELECT id FROM utente WHERE email = :email
                    ';

                    $check = $pdo->prepare($query);
                    $check->bindParam(':email', $email, PDO::PARAM_STR);
                    $check->execute();

                    $mail = $check->fetchAll(PDO::FETCH_ASSOC);
                    if (count($mail) > 0) {
                        $msg = 'Username già in uso';
                    } else {
                        $sql = "INSERT INTO utente(nome, cognome, email, pwd) VALUES ('$fname', '$lname','$email','$password_hash');";
                        $stmt= $pdo->prepare($sql);
                        $stmt->execute();
                        if ($stmt->rowCount() > 0) {
                                echo "<div style='color: blue;'>Registrazione eseguita con successo</div>";
                        } else {
                            $msg = 'Problemi con l\'inserimento dei dati';
                        }
                    }
                }
                echo "<div style='color: red;'>".$msg."</div>";
            }
        ?>
        <div class="input-container ic1">
          <input id="firstname" class="input" type="text" placeholder=" " name="firstname"/>
          <div class="cut"></div>
          <label for="firstname" class="placeholder">First name</label>
        </div>
        <div class="input-container ic2">
          <input id="lastname" class="input" type="text" placeholder=" " name="lastname"/>
          <div class="cut"></div>
          <label for="lastname" class="placeholder">Last name</label>
        </div>
        <div class="input-container ic2">
          <input id="email" class="input" type="text" placeholder=" " name="email"/>
          <div class="cut cut-short"></div>
          <label for="email" class="placeholder">Email</label>
        </div>
        <div class="input-container ic2">
          <input id="password" class="input" type="password" placeholder=" " name="pwd"/>
          <div class="cut"></div>
          <label for="password" class="placeholder">Password</>
        </div>
        <div class="input-container ic2">
          <input id="rpassword" class="input" type="password" placeholder=" " name="rpassword"/>
          <div class="cut"></div>
          <label for="rpassword" class="placeholder">Ripeti</>
        </div>
        <div class="ic2">
          <a href="login.php">Effettua il login</a>
        </div>
        <button type="text" class="submit">submit</button>
    </form>
    <a href="../index.php"><img src="../src/img/close.png" alt="close" id="close "></a>
    </body>
</html>