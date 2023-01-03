<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/caderno.css">
    <style>
    </style>
</head>
<body>
    <div class="caderno">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <main>
            <h1>AULA 9 - MODULO 6 - FORMULARIOS, GET E POST</h1>

                <code>
                    <br>
                    <!-- GET  -->
                    <div class="login-container-get">
                        <h2>LOGIN CONTAINER GET</h2>
                        <form method="get">
                            <input type="text" name="nome" placeholder="nome">
                            <input type="email" name="email" placeholder="email">
                            <input type="submit" name="action" value="Enviar!">
                        </form>
                    </div>
                         <?php

                        if (isset($_GET["action"])) {
                            $nome = $_GET["nome"];
                            $email = $_GET["email"];


                            echo "$nome <br>$email";
                        }


                        ?>


                    <div class="login-container-post">
                        <h2>LOGIN CONTAINER POST</h2>
                        <form method="get">
                            <input type="text" name="n1" placeholder="NUMERO 1">
                            <input type="text" name="n2" placeholder="NUMERO 2">
                            <input type="submit" name="action" value="Enviar!">
                        </form>
                    </div>
                         <?php

                        if (isset($_POST["action"])) {
                            $n1= $_POST["n1"];
                            $n2 = $_POST["n2"];
                            echo $n1 + $n2;
                        }


                        ?>
                </code>
        </main>
    </div>
</body>
</html>