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
            <h1>AULA 6 - MODULO 7 - METODOS MAGICOS</h1>
                <code>

                <?php 
                include "class1.php";
                    $class =  new Class1('Gabriel', '21');

                    echo $class->getAge();
                    echo $class->getName();
                ?>
                </code>
        </main>
    </div>
</body>
</html>