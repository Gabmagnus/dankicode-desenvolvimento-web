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
            <h1>AULA 11 - MODULO 6 - SINTAXE ALTERNATIVA</h1>
            <code>
    	        <?php 
                    class Principal
                    {
                        public static $variavel;

                        public function metodoEstatico(){
                            echo self::$variavel;
                        }
                    }
                    
                    $obj1 = new Principal;
                    $obj2 = new Principal;
                    
                    Principal::$variavel = 'gremio';
                    echo $obj1->metodoEstatico();
                ?>
            </code>
        </main>
    </>
</body>
</html>