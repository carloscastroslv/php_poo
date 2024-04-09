<?php

require_once 'src/autoload.php';

$endereco1 = new Endereco
("CE","Pacatuba","Rua Pedro de Sá Roriz","118","Pavuna","61.809-125");

// Não posso mais usar a classe pesso conforme abaixo pois foi declarada como abstract
// $pessoa1 = new Pessoa("Carlos",50, $endereco1);
// $pessoa2 = new Pessoa("Jorge", 30, $endereco1);
// $pessoa3 = new Pessoa("Jessica", 21, $endereco1);

$funcionario1 = new Funcionario
(
"Carlos Antonino C S", 40, //dados da classe Pessoa
 $endereco1, // dados da classe endereco
 "Programador", 3500 // dados da classe funcionario
);

$cliente1 = new Cliente("Carlos Antonino C S", 40, $endereco1, "30/05/1972", 5000);

echo "<pre>";
print_r($funcionario1);
echo "</pre>";

echo "<pre>";
print_r($cliente1);
echo "</pre>";

// echo "<h1>O numero de pessoas é: " . Pessoa::getnumDePessoas() . "</h1>";

/*
$pessoa1 -> nome = "Carlos";
$pessoa1 -> idade = 52;

$pessoa2 -> nome = "Jose";
$pessoa2 -> idade = 40;


echo "<h1>Nome: $pessoa1->nome</h1>";
echo "<h1>Idade: $pessoa1->idade</h1>";
*/

// $pessoa1-> setNome("Carlos");
// $pessoa1-> setIdade(40);
// $pessoa2-> setNome("Maria");
// $pessoa2-> setIdade(32);
// $pessoa3-> setNome("Jessica");
// $pessoa3-> setIdade(21);

// echo "<h1>Nome:  {$pessoa1->getNome()} </h1>";
// echo "<h1>Idade: {$pessoa1->getIdade()} </h1>";
// echo "<h1>Nome:  {$pessoa2->getNome()} </h1>";
// echo "<h1>Idade: {$pessoa2->getIdade()} </h1>";
// echo "<h1>Nome:  {$pessoa3->getNome()} </h1>";
// echo "<h1>Idade: {$pessoa3->getIdade()} </h1>";

// echo "<pre>";
// var_dump($pessoa1);
// var_dump($pessoa2);
// var_dump($pessoa3);
// echo "</pre>";