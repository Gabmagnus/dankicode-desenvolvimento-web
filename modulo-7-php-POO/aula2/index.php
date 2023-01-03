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
            <h1>AULA 2 - MODULO 7 - PUBLIC, PRIVATE, STATIC</h1>
                <code>
                    <?php 
                    include "exemplo.class.php";

                    $exemplo = new Exemplo;
                    $exemplo2 = new Exemplo;

                    // $exemplo->var1 - var1 é privada, portanto dará erro!
                    $exemplo->var2 = 'é ele!'; //var2 é publica!
                    // $exemplo->metodoPrivado() - metodoPrivado() é privada, portanto dará erro!
                    $exemplo->metodoPublico("é o gremio"); //var1 privada pode ser editada a partir de um metodo publico!

                    echo "<br><br><br>";



                    //STATIC
                    //métodos estáticos podem ser chamados sem uma instância do objeto criada, a pseudo-variável $this não está disponível dentro de um método declarado como estático.

                    // $exemplo->var3 = 'gremio';
                    // echo "$exemplo->var3";
                    // $exemplo2->var3 = 'gremio';
                    // echo "$exemplo2->var3";

                    // ou

                    echo Exemplo::metodoEstatico("gremio");
                    Exemplo::$var3 = 'gremio';
                    echo Exemplo::$var3;
                    ?>
                </code>
        </main>
    </div>
</body>
</html>