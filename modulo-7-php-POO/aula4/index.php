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
            <h1>AULA 4 - MODULO 7 - ABSTRACT, SELF E MAIS</h1>
                <code>
                <?php 
                //classes abstracts nao podem ser instanciadas, somente extendidas!
                abstract class Gremio 
                {
                    public function func1() {
                        echo "é o gremio!<br>";

                    }
                    //metodos abstracts tem que ser redeclarados na classe children

                    abstract function func2();

                
            }

                class Principal extends Gremio
                {

                    
                    public static function metodoEstatico() {
                        echo "esse metodo é estatico!";
                    }


                    public function func2()
                    {
                        self::metodoEstatico(); // == Principal::metodoEstatico();
                        //parent::func2(); Replica a função sobreposta
                    } // -> OBRIGATÓRIO!!
                }
                
                // $gremio = new Gremio;
                // $gremio->func1(); -> classe abstract, portanto erro
                $principal = new Principal;
                $principal->func1();
                $principal->func2();                
                
                
                ?>
                </code>
        </main>
    </div>
</body>
</html>