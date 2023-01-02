<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/caderno.css">
    </head>
<body>
    <div class="caderno">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <main style="position: relative;">
            <h1>AULA 10 - MODULO 6 - SESSOES E COOKIES</h1>
            <code>

            <a style="position: absolute;
                        bottom: 0;
                        right: 0;" 
                        href="/modulo-6-php-intermediário/aula10-sessions/index.php">
                    <button style="width: 120px;
                                    height: 50px;
                                    background: darkblue;
                                    color: white;
                                    border: none;
                                    cursor: pointer;">
                        << Index
                    </button>
            </a>
            <?php     
                session_start();

                echo $_SESSION['USER'];
                echo '<br>';
                echo $_SESSION['PASS'];
            ?>
            </code>
        </main>
    </>
</body>
</html>