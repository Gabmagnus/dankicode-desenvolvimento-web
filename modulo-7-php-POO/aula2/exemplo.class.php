<?php 
    class Exemplo
    {
        private $var1;
        public $var2;
        public static $var3;
    

        public function metodoPublico(string $var1) {
            $this->var1/*valor da classe */ = $var1/*valor do metodo*/;
            echo "<br>$this->var1<br>";
        }

         private function metodoPrivado() {

        }

        public static function metodoEstatico(string $conteudo)
        {
            echo "<br>$conteudo<br>";
        }
    }

?>
