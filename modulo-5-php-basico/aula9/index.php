<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/caderno.css">
    <style>
        .login {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;

        }

        input {
            width: 100%;
            height: 35px;
            background: #0C002B;
            border: none;
            margin: 3px;
            padding: 15px;
            border-radius: 5px;
            color: white;
        }

        input[type="submit"] {
            width: 100%;
            height: 50px;
            background: #0C002B;
            border: none;
            margin: 3px;
            padding: 15px;
            cursor: pointer;
            transition: all .6 ease-in-out;
        }

        
        input[type="submit"]:hover {
            transform: scale(105%);

        }
    </style>
</head>
<body>
    <div class="caderno">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <main>
            <h1>AULA 2 - MODULO 5</h1>
                <code style="display: flex; justify-content: flex-start; flex-direction:column; align-items: center; height: 100%; width: 100%;">
                    <div class="login">
                        <form method="POST" name="login">
                            <input type="text" name="user" placeholder="Username"><br>
                            <input type="password" name="pass" placeholder="Password"><br>
                            <input type="submit">
                    </div>
                    </form>
                    <br>
                    <?php
                    $db_users = ['gabmagnus' => 'Coxinha0604', 'gremio' => 'gremio99752', 'gremio2' => '8yMhnIvpT3@rdGA'];

                    $usr_name = @$_POST["user"];
                    $usr_pass = @$_POST["pass"];

                    echo $usr_pass;
                    echo $usr_name;
                    if ($usr_name != null) {
                        if (array_key_exists($usr_name, $db_users)) {
                            if ($db_users[$usr_name] == $usr_pass) {
                                echo '<br><div style="color: green">Logado com sucesso!</div>';
                                echo '<style>input  { border:1px solid green;}</style>';
                            } else {
                                echo '<br><div style="color: red">Login ou senha invalidos!</div>';
                                echo '<style>input  { border:1px solid red;}</style>';
                            }
                        } else {
                            echo '<br><div style="color: red">Login ou senha invalidos!</div>';
                            echo '<style>input  { border:1px solid red;}</style>'; 
                        }
                    }
                    ?>
                </code>
        </main>
    </div>
</body>
</html>