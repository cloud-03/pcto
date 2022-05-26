<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--css-->
    <link rel="stylesheet" href="src/css/stile.css">
    
</head>
<body>
    <div class="wrapper">
        <div class="nav">
            <div class="grid">
                <img alt="logo" src="src/img/logo1.png" class="one" id="logo">
                <div class="button two" id="prodotto" role="button"><span class="text">Prodotto</span></div>
                <div class="button three" id="chiSiamo"role="button"><span class="text">Chi siamo</span></div>
                <div class="button four" id="partner" role="button"><span class="text">Partner</span></div>
                <div class="button five" id="software" role="button"><span class="text">Software</span></div>
                <div class="six" id="login"> <a href="pages/login.php">Login</a></div>
            </div>
        </div>
        <div class="start">
            <h1>WELCOME to the future</h1>
        </div>
   
        <div class="content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>

        <div class="footer">

        </div>

        
    </div>
    <div class="login">
        <img src="src/img/close.png" alt="close" id="close">
        <h3>Login</h3>
        <form action="./index.php" method="post">
            <label for="user">Username</label>
            <input type="text" name="user" id="">
            <label for="pwd">Password</label>
            <input type="password" name="pwd" id="pwd">
            <a href="pages/regist.html" id="redirect">Registrati</a>
            
            <input type="submit" value="ENTER" id="submit">
        </form>
    </div>
    <script src="src/js/app.js"></script>
</body>
</html>