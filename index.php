<?php

require_once 'autoload.php';

use Castro\Educa\Infraestrutura\Persistencia\CriadorConexao;
use Castro\Educa\Infraestrutura\Repositorio\PdoRepositorioProduto;
use Castro\Educa\Model\Produto;

echo "<pre>";
    // $conexao = CriadorConexao::criarConexao();
    // var_dump($conexao);

    $repositorio = new PdoRepositorioProduto(CriadorConexao::criarConexao());
    // var_dump($repositorio);
    
    // $produto1 = new Produto(1, "Queijo", 21.00);
    // $produto2 = new Produto(NULL, "Mamão", 3.00);
    // $produto3 = new Produto(NULL, "Pera", 8.10);
    // $produto4 = new Produto(NULL, "Jambo", 6.00);
    // $produto5 = new Produto(NULL, "Morango", 3.00);
    // $produto6 = new Produto(NULL, "Cenoura", 3.00);
    $produto = new Produto(2, "Cenoura", 5.00);
    // // var_dump($produto1);

    echo "<h1>Lista de Produtos</h1>";
    // $repositorio->todosProdutos();
    // $repositorio->salvar($produto1);
    // $repositorio->salvar($produto2);
    // $repositorio->salvar($produto3);
    // $repositorio->salvar($produto4);
    // $repositorio->salvar($produto5);
    // $repositorio->salvar($produto6);
    // $repositorio->deleteProduto($produto1);
    // $repositorio->updateProduto($produto);
    $repositorio->readProduto($produto);
    // $repositorio->todosProdutos();    

    echo "</pre>";


   // Vamos continuar de onde paramos https://www.youtube.com/watch?v=UF5aDkmqMrM&list=PLnex8IkmReXz6t1rqxB-W17dbvfSL1vfg&index=13