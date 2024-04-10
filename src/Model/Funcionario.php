<?php

    namespace Castro\Educa\Model;


    class Funcionario extends Pessoa
    {
        private string $cargo;
        private float $salario;

        public function __construct(
                string $nome, int $idade, // dados da classe Pessoa
                Endereco $endereco, // dados da classe Endereco
                string $cargo, float $salario // dados desta classe
                )
        {
            parent::__construct($nome, $idade, $endereco);
            $this -> cargo = $cargo;
            $this -> salario = $salario;
        }


        /**
         * Get the value of cargo
         *
         * @return string
         */
        public function getCargo(): string
        {
                return $this->cargo;
        }

        /**
         * Set the value of cargo
         *
         * @param string $cargo
         *
         * @return self
         */
        public function setCargo(string $cargo): self
        {
                $this->cargo = $cargo;

                return $this;
        }

        /**
         * Get the value of salario
         *
         * @return string
         */
        public function getSalario(): float
        {
                return $this->salario;
        }

        /**
         * Set the value of salario
         *
         * @param string $salario
         *
         * @return self
         */
        public function setSalario(string $salario): self
        {
                $this->salario = $salario;

                return $this;
        }

        public function setDesconto(): void
        {
            $this -> desconto = 0.10;
        }
    }