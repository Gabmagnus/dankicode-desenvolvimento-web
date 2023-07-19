<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;400;500;600;700;800;900&display=swap');

        * { padding: 0; margin: 0; box-sizing: border-box; font-family: var(--mainfont);}

        :root {
            --mainfont: 'Inter';
            --color1:#090088;
            --color2:#02006c;
            --color3:#010057;
            --color4:#010048;
            --color5:#03002E;
        }
        main {
            width: 100vw;
            height: 100vh;
            background: var(--color5); 
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 600px;
            height: 600px;
            background-color: var(--color4);
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            border-radius: 4px;
            box-shadow: 0 0 15px rgba(0,0,0,.30);
        }

        .login-container > form  input {
            width: 100%;
            height: 45px;
            margin-bottom: 5px;
            padding: 10px;
            background: var(--color5);
            border: .5px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0px 0px 5px rgba(0,0,0,.30);
            color: white;
        }

        .login-container > form > input[type='submit'] 
        {
            font-size: 1em;
            font-weight: 700;
            transition: all .1s ease-in-out;
            cursor: pointer;
        }

        .auth form input {
            width: 100%;
            height: 45px;
            margin-bottom: 5px;
            padding: 10px;
            background: var(--color5);
            border: .5px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0px 0px 5px rgba(0,0,0,.30);
            color: white;
            font-size: 1em;
            font-weight: 700;
            transition: all .1s ease-in-out;
            cursor: pointer;

        } 
        .auth form input[type='submit']:hover 
        {
            transform: scale(102%);
        }
        .login-container > form > input[type='submit']:hover 
        {
            transform: scale(102%);
        }
        .auth {
            display: none;
        }
        .invalid-login {
            display: none;
        }

    </style>
</head>
<body>
    <main>
        <div class="login-container">
        <form class="login" method="post">
            <input type="text" name="user" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="LOGIN">
        </form>
        <div class="auth">
            <form method="post">
                <input type="submit" name="logout" value="LOGOUT">
            </form>
            <img class="poze" src="poze.jpg" alt="poze" style="width: 400px; height: 400px;">
        </div>
        <div class="invalid-login" style="color: red;">Login invalido!</div>
        </div>

        <a style="position: absolute;
                        bottom: 0;
                        right: 0;" 
                        href="/modulo-6-php-intermediário/aula10-sessions/pagina2.php">
                    <button style="width: 120px;
                                    height: 50px;
                                    background: darkblue;
                                    color: white;
                                    border: none;
                                    cursor: pointer;">
                        next page >>
                    </button>
            </a>

    </main>


    <?php
    session_start();
    $login_db = ['gabmagnus' => 'Coxinha0604',
                'gremio2' => 'efvxVe93oqQb2mF',
                'eumesmo' => 'KmljK!UCegOJuSN',
                'jose' => 'R2GiEl6l4qZo6Rc'];

    // Logout
    if (isset($_POST['logout'])) {
        $pass = null;
        $user = null;
        unset($user);
        unset($pass);
        unset($_SESSION['PASS']);
        unset($_SESSION['USER']);
        // session_destroy();
    } 

    if (isset($_SESSION['PASS'])) {
        if (isset($_POST['password'])) {
            $pass = $_POST['password'];
        } else {
            $pass = $_SESSION['PASS'];
        }
    } else {
        if (isset($_POST['password'])) {
            $pass = $_POST['password'];
        } else {
        }
    }

    if (isset($_SESSION['USER'])) {
        if (isset($_POST['submit'])) {
            $user = $_POST['user'];
        } else {
            $user = $_SESSION['USER'];
        }
    } else {
        if (isset($_POST['submit'])) {
            $user = $_POST['user'];
        } else {
        }
    }
    if (isset($user) && isset($pass)) {
        $userlwrcase = strtolower($user);
        if (array_key_exists($userlwrcase, $login_db)) {
            if ($pass == $login_db[$userlwrcase]) {
                $_SESSION['USER'] = $userlwrcase;
                $_SESSION['PASS'] = $login_db[$userlwrcase];
                echo "<style>
                    .auth {
                    display: block;
                    }
                    .login {
                        display: none;
                    }
                    </style>";

            } else {
                if (!isset($pass)) {
                    echo "<style>
                        .invalid-login {
                            display: block;
                        }
                        </style>";
                }
            }
        } else {
            if (!isset($user)) {
                echo "<style>
                    .invalid-login {
                        display: block;
                    }
                    </style>";
            }
        }
    }
    if (isset($user)) {
        echo "$user<br>";
    }
    if (isset($pass)) {
        echo "$pass<br>";
    }
    ?>
</body>
</html>