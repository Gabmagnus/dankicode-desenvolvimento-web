<?php 

    /**
     * undocumented class
     */
    class Class1
    {

        private $nome;
        private $idade;

        public function __construct(string $nome, string $idade) {
            $this->nome = $nome;
            $this->idade = $idade;

        }

        public function getName() {
            return $this->nome;
        }

        public function getAge() {
            return $this->idade;
        }
    }
    

?>