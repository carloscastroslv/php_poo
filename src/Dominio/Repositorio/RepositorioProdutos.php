<?php

    namespace Castro\Educa\Dominio\Repositorio;

    use Castro\Educa\Model\Produto;

    interface RepositorioProdutos
    {
        public function todosProdutos(): array;
        public function salvar(Produto $produto): bool;
        public function createProduto(Produto $produto): bool;
        public function readProduto(Produto $produto): array;
        public function updateProduto(Produto $produto): bool;
        public function deleteProduto(Produto $produto): bool;
    }