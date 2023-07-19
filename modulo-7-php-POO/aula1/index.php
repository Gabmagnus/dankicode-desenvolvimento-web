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
            <h1>AULA 1 - MODULO 7 - INTRODUÇAO POO</h1>
                <code>
                    <?php 
                    /*
                    
                    Pessoa
                    {
                       ATRIBUTOS = VARIAVEIS 
                        nome 
                        idade
                        peso

                        METODOS = FUNÇOES
                        comer()
                        crescer()
                    }
                    
                    
                    */
                    
                    class Pessoa {
                        //OBJETO Pessoa!


                        private $nome= 'gabriel';
                        private $idade= 21;
                        public $altura = 1.80;

                        public function crescer()
                        {
                            $this->altura+=0.05; 
                            echo "estou crescendo!, agora tenho $this->altura! <br>";
                        }

                        private function comer()
                        {
                            echo "estou comendo!";
                        }
                    }
                    // instanciar!!!!
                    $pessoa1 = new Pessoa;
                    $pessoa2 = new Pessoa;
                    $pessoa2->altura = 1.75;
                    $pessoa1->crescer();
                    $pessoa2->crescer();
                    $pessoa2->crescer();
                    $pessoa2->crescer();
                    $pessoa2->crescer();
                    $pessoa2->crescer();
                    $pessoa2->crescer();
                    $pessoa2->crescer();
                    $pessoa1->crescer();
                    ?>
                </code>
        </main>
    </div>
</body>
</html>