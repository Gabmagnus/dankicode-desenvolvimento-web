<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do poze</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        .cookies {
            z-index: 999;
            position: fixed;
            width: 100vw;
            height: 100vh;
            display: none;
        }

        .cookies-container {
            position: absolute;
            bottom: 0;
            width: 100vw;
            height: 75px;
            background: rgba(0, 0, 0, .6);
            border-radius: 10px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }

        .cookies-container form input{
            width: 80px;
            height: 50px;
            background: #03002E;
            color: white;
            margin-left: 0px;
            border-radius: 10px;
            cursor: pointer;
        }

        .cookie-checker {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            width: 100%;
            height: 20px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="cookies">
        <div class="cookies-container">
            <div class="cookie-text">
                    <p>Nosso site utiliza cookies para melhor experiencia do usuário! </p>
            </div>
            <form method="post">
                <input type="submit" name="cookie-law" value="Aceitar">
            </form>
        </div>
    </div>
    <main>
        <div class="login-container">
        <form class="login" method="post">
            <input type="text" name="user" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="LOGIN">
            <div class="cookie-checker">
                <input type="checkbox" name="cookie-checker" id="cookie-checker-inp">
                <label for="cookie-checker">Manter-me conectado</label>
            </div>
            <a href="#"></a>
        </form>
        <div class="auth">
            <form method="post">
                <input type="submit" name="logout" value="LOGOUT">
            </form>
            <img class="poze" src="assets/poze.jpg" alt="poze" style="width: 400px; height: 400px;">
        </div>
        <div class="invalid-login" style="color: red;">Login invalido!</div>
        </div>

        <a style="position: absolute; bottom: 0; right: 0;" 
            href="pagina2.php">
                    <button style="width: 120px; height: 50px; background: darkblue; color: white; border: none; cursor: pointer;">
                    next page >>
                    </button>
            </a>

    </main>


    <?php
    include "classes/Auth.php";
    class Main {
        public $auth;

        public function __construct()
        {
            $this->auth = new Auth;
            $this->doLogin();
        } 
    
        public function doLogin() {
            
            $this->auth->logoutCleaner();
            $this->auth->cooieUserChecker();
            $this->auth->cookiePasswordCheck();
        
            if ($this->auth->loginAuth()) {
                echo "<style>
                    .auth {
                        display: block;
                    }
                    .login {
                        display: none;
                    }
                    </style>";
            } else {
                if ($this->auth->user != null && $this->auth->pass != null) {
                    echo "<style>
                        .invalid-login {
                            display: block;
                        }
                        .login-container > form input[type=text],
                        .login-container > form input[type=password]  {
                            border: 2px solid red;
                        }
                        </style>";
                }
            }
        }
    }

    $main = new Main;
    
    
    
    
    

    ?>
</body>
</html>