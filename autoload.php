<?php


spl_autoload_register(
    function(string $nomeCompletoDaClasse)
    {
        $caminhoCompleto = str_replace('Castro\\Educa','src', $nomeCompletoDaClasse);
        $caminhoArquivo  = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoCompleto);
        $caminhoArquivo .= '.php';
        if (file_exists($caminhoArquivo)){
            require_once $caminhoArquivo;
        }

    });