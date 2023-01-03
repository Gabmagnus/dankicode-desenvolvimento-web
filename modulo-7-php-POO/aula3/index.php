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
            <h1>AULA 3 - MODULO 7 - FINAL CLASS, HERANÇAS, PROTECTED</h1>
                <code>
                    <?php 
                   /*final nao pode ser extendido para outra classe*/
                    class Papito
                    {
                    /*protected pode ser extendido para outras classes, mas nao pode ser chamada fora da class*/
                        protected $variaveldobalacobaco = "balacobaco"; 
                    }

                    class Children extends Papito
                    {
                        public function mostrarBalacobaco() {
                            echo $this->variaveldobalacobaco;
                        }
                    }
                    
                    $children = new Children; 
                    // echo $children->variaveldobalacobaco; variavel balacobaco é protected
                    echo $children->mostrarBalacobaco();
                    
                    
                    ?>
                </code>
        </main>
    </div>
</body>
</html>