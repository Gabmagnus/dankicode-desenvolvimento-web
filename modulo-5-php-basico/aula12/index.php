<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/caderno.css">
    </head>
    <style>
        main {
            overflow: auto;
        }
    </style>
<body>
    <div class="caderno">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <main>
            <h1>AULA 12 - MODULO 5 - LAÇOS</h1>
            <code>
            <?php
                echo "<br><br><br>";
                //laço for
                for ($i = 1; $i <= 10; $i++) {
                    echo "$i <hr>";
                }
                echo "<br><br><br>";
                //laço while
                $j = 0;
                while ($j < 10) {
                    echo "$j <hr>";
                    $j++;
                }
                echo "<br><br><br>";
                //do
                $c = 11;
                do {
                    echo "$c <br>";
                    $c--;
                } while($c == 9);
            ?>
            </code>
        </main>
    </>
</body>
</html>