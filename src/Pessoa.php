<?php

     abstract class Pessoa
    {
        // atributos ou caracteristicas = variaveis
        private string $nome;
        private int $idade;
        private Endereco $endereco; // pegando dados da Classe Endereco
        protected float $desconto;
        private static int $numDePessoa = 0;

        public function __construct
        (string $nome,int $idade,
        Endereco $endereco // Dados da classe Endereco
        )
        {
            $this-> nome = $nome;
            $this-> idade = $idade;
            $this-> validaIdade($idade);
            $this-> Endereco = $endereco; // Vem da classe Endereco
            $this-> setDesconto();
            self::$numDePessoa++;
        }

        // acessores os métodos get = pegar e set editar

        

        /**
         * Get the value of nome
         *
         * @return string
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @param string $nome
         *
         * @return self
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of idade
         *
         * @return int
         */
        public function getIdade(): int
        {
                return $this->idade;
        }

        /**
         * Set the value of idade
         *
         * @param int $idade
         *
         * @return self
         */
        public function setIdade(int $idade): self
        {
                $this->idade = $idade;

                return $this;
        }

        public static function getNumDePessoas()
        {
            return self::$numDePessoa;
        }

        public function validaIdade(int $idade)
        {
            if($this->idade > 0 AND $this->idade < 120){
                $this-> idade = $idade;
            } else {
                echo "Idade não permitida!";
                exit;
            }
        }

        protected abstract function setDesconto(): void;

        public function getDesconto(): float
        {
            return $this -> desconto;
        }
        
    }