<?php

    namespace Castro\Educa\Model;

    class Produto 
    {
        private ?int   $idProduto;
        private string $nomeProduto;
        private float  $precoProduto;

        public function __construct(?int $idProduto, string $nomeProduto, float $precoProduto)
        {
            $this -> idProduto    = $idProduto;
            $this -> nomeProduto  = $nomeProduto;
            $this -> precoProduto = $precoProduto;
        }

        /**
         * Get the value of idProduto
         *
         * @return ?int
         */
        public function getIdProduto(): ?int
        {
                return $this->idProduto;
        }

        /**
         * Set the value of idProduto
         *
         * @param ?int $idProduto
         *
         * @return self
         */
        public function setIdProduto(?int $idProduto): self
        {
                $this->idProduto = $idProduto;

                return $this;
        }

        /**
         * Get the value of nomeProduto
         *
         * @return string
         */
        public function getNomeProduto(): string
        {
                return $this->nomeProduto;
        }

        /**
         * Set the value of nomeProduto
         *
         * @param string $nomeProduto
         *
         * @return self
         */
        public function setNomeProduto(string $nomeProduto): self
        {
                $this->nomeProduto = $nomeProduto;

                return $this;
        }

        /**
         * Get the value of precoProduto
         *
         * @return float
         */
        public function getPrecoProduto(): float
        {
                return $this->precoProduto;
        }

        /**
         * Set the value of precoProduto
         *
         * @param float $precoProduto
         *
         * @return self
         */
        public function setPrecoProduto(float $precoProduto): self
        {
                $this->precoProduto = $precoProduto;

                return $this;
        }
    }