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
            <h1>AULA 7 - MODULO 6 - SWITCH, CONTINUE, BREAK</h1>
                <code>
                    <?php 

                        $nome = 'Gabriel';

                        // switch ($nome) {
                        //     case 'Gabriel':
                        //         echo "Meu nome!";
                        //         break;
                        //     default:
                        //         echo "nao é meu nome :(";
                        //         break;
                        // }

                        //break para o loop for, while, do, foreach e switch
                        for ($i=0; $i < 10; $i++) { 
                            echo "<hr>";
                            if ($i != 6) {
                                break;
                            }
                        }
                    ?>
                </code>
        </main>
    </div>
</body>
</html>