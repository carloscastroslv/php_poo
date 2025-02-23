<?php

    namespace Castro\Educa\Infraestrutura\Persistencia;

    use PDO;

    class CriadorConexao
    {
        public static function criarConexao(): PDO
        {
            try {
                $pdo = new PDO('mysql:host=127.0.0.1;dbname=db_educa','root','');
                $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            } catch(PDOException $excecao){
                echo 'ERRO: ' . $excecao->getMessage();
            }
        }
    }