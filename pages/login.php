<?php
    session_start(); 
    require_once('../src/php/database.php');

    if (isset($_SESSION['session_id'])) {
        header('Location: dashboard/index.php');
        exit;
    }
?>
<!DOCTYPE html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../src/css/login.css">
</head>
<body>
    <form action="login.php" method="POST" >
        <div class="title">Welcome</div>
        <div class="subtitle">Effettua il login!</div>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $email = $_POST["email"] ?? '';
                $pwd = $_POST["password"] ?? '';


                if(empty($email) || empty($pwd)){
                    echo "<div style='color: red;''>Dati non conformi</div>";
                }
                else{
                    $query = "
                        SELECT email, pwd, id
                        FROM utente
                        WHERE email = :email;
                    ";
                    
                    $check = $pdo->prepare($query);
                    $check->bindParam(':email', $email, PDO::PARAM_STR);
                    $check->execute();
                    
                    $user = $check->fetch(PDO::FETCH_ASSOC);

                    if (!$user || password_verify($pwd, $user['pwd']) === false) {
                        echo "<div style='color: red;''>Credenziali utente errate</div>";
                    } else {
                        $_SESSION['session_id'] = session_id();
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['id'] = $user['id'];
                        
                        header('Location: dashboard/index.php');
                        exit;
                    }
                }
            }
        ?>
        <div class="input-container ic1">
          <input id="email" class="input" type="email" placeholder=" " name="email"/>
          <div class="cut"></div>
          <label for="email" class="placeholder">Email</label>
        </div>
        <div class="input-container ic2">
          <input id="password" class="input" type="password" placeholder=" " name="password"/>
          <div class="cut"></div>
          <label for="password" class="placeholder">Password</label>
        </div>
        <div class="ic2">
          <a href="regist.php" id="qualcosa">Non sei ancora registrato?</a>
        </div>
        <button type="text" class="submit">submit</button>
    </form>
      <a href="../index.php"><img src="../src/img/close.png" alt="close" id="close "></a>
    </body>
</html>