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
            <h1>AULA 5 - MODULO 7 - INTERFACE E IMPLEMENTS</h1>
                <code>
                    <?php 
                    
                        include 'interface.php';

                        class Teste implements Interface1 {

                            public function printOnScreen(string $par)
                            {
                                
                            }

                        }

                        $teste = new Teste();
                    
                    ?>
                </code>
        </main>
    </div>
</body>
</html>