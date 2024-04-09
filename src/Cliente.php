<?php

    class Cliente extends Pessoa // Extend a classe e assim posso deixar Pessoa abstract e usar os dados nas classes filhas
    {
        private string $dataNascimento;
        private float $renda;

        public function __construct(string $nome,int $idade,Endereco $endereco,string $dataNascimento, float $renda)

        {
            parent::__construct($nome, $idade, $endereco);
            $this -> dataNascimento = $dataNascimento;
            $this -> renda = $renda;
        }


        /**
         * Get the value of dataNascimento
         *
         * @return string
         */
        public function getDataNascimento(): string
        {
                return $this->dataNascimento;
        }

        /**
         * Set the value of dataNascimento
         *
         * @param string $dataNascimento
         *
         * @return self
         */
        public function setDataNascimento(string $dataNascimento): self
        {
                $this->dataNascimento = $dataNascimento;

                return $this;
        }

        /**
         * Get the value of renda
         *
         * @return float
         */
        public function getRenda(): float
        {
                return $this->renda;
        }

        /**
         * Set the value of renda
         *
         * @param float $renda
         *
         * @return self
         */
        public function setRenda(float $renda): self
        {
                $this->renda = $renda;

                return $this;
        }

        public function setDesconto(): void
        {
            $this -> desconto = 0.05;
        }
    }