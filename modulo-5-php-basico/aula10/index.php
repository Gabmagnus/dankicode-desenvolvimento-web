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
        <main>
            <h1>AULA 10 - MODULO 5 - OPERADORES LOGICOS</h1>
            <code>
            <?php
                $nome1 = 10;
                $nome2 = "10";

                $nome3 = "Gabriel";
                $nome4 = "gabriel";

                $nome5 = 10;
                $nome6 = 10;

                if ($nome1 == $nome2) { 
                    echo '<div style="width: 250px;height: 250px; background: white; color:black;">Igual</div>';
                }

                if ($nome3 != $nome4) {
                    echo '<div style="width: 250px;height: 250px; background: white; color:black;">Diferente</div>';
                }
                if ($nome1 === $nome2) {
                    echo '<div style="width: 250px;height: 250px; background: white; color:black;">Identicos(mesmo tipo de variavel!)</div>';
                }
            ?>

            </code>
        </main>
    </>
</body>
</html>