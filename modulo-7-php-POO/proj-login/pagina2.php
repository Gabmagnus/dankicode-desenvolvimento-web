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
                        bottom: -10VH;
                        right: -60VW;" 
                        href="index.php">
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
                if(isset($_COOKIE['cookie-law'])){
                    echo "COOKIE-LAW ENCONTRADO! <BR>";
                }
                echo 'cookie user : ';  
                echo $_COOKIE['USER'];
                echo '<br><br>';
                echo 'cookie pass : ';
                echo $_COOKIE['PASS'];
            ?>
            </code>
        </main>
    </>
</body>
</html>