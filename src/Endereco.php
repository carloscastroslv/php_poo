<?php   

    class Endereco
    {
        private string $uf;
        private string $cidade;
        private string $nomeLogradouro;
        private string $numero;
        private string $bairro;
        private string $cep;

        public function __construct(
            string $uf,string $cidade, string $nomeLogradouro,
            string $numero,string $bairro,string $cep)
        {
            $this -> uf = $uf;
            $this -> cidade = $cidade;
            $this -> nomeLogradouro = $nomeLogradouro;
            $this -> numero = $numero;
            $this -> bairro = $bairro;
            $this -> cep = $cep;
        }

        /**
         * Get the value of uf
         *
         * @return string
         */
        public function getUf(): string
        {
                return $this->uf;
        }

        /**
         * Set the value of uf
         *
         * @param string $uf
         *
         * @return self
         */
        public function setUf(string $uf): self
        {
                $this->uf = $uf;

                return $this;
        }

        /**
         * Get the value of cidade
         *
         * @return string
         */
        public function getCidade(): string
        {
                return $this->cidade;
        }

        /**
         * Set the value of cidade
         *
         * @param string $cidade
         *
         * @return self
         */
        public function setCidade(string $cidade): self
        {
                $this->cidade = $cidade;

                return $this;
        }

        /**
         * Get the value of nomeLogradouro
         *
         * @return string
         */
        public function getNomeLogradouro(): string
        {
                return $this->nomeLogradouro;
        }

        /**
         * Set the value of nomeLogradouro
         *
         * @param string $nomeLogradouro
         *
         * @return self
         */
        public function setNomeLogradouro(string $nomeLogradouro): self
        {
                $this->nomeLogradouro = $nomeLogradouro;

                return $this;
        }

        /**
         * Get the value of numero
         *
         * @return string
         */
        public function getNumero(): string
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         *
         * @param string $numero
         *
         * @return self
         */
        public function setNumero(string $numero): self
        {
                $this->numero = $numero;

                return $this;
        }

        /**
         * Get the value of bairro
         *
         * @return string
         */
        public function getBairro(): string
        {
                return $this->bairro;
        }

        /**
         * Set the value of bairro
         *
         * @param string $bairro
         *
         * @return self
         */
        public function setBairro(string $bairro): self
        {
                $this->bairro = $bairro;

                return $this;
        }

        /**
         * Get the value of cep
         *
         * @return string
         */
        public function getCep(): string
        {
                return $this->cep;
        }

        /**
         * Set the value of cep
         *
         * @param string $cep
         *
         * @return self
         */
        public function setCep(string $cep): self
        {
                $this->cep = $cep;

                return $this;
        }
    }