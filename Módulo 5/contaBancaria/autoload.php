<?php

// Para não inserir mais os <require>, usamos a função:

spl_autoload_register(
    function(string $namespaceClasse):void {
        $caminho = "/src";
        $diretorio_classe = str_replace("\\",DIRECTORY_SEPARATOR, $namespaceClasse);
        include_once getcwd().$caminho.DIRECTORY_SEPARATOR."{$diretorio_classe}.php";
   }
);

// Com isso, o código é reduzido e só precisa do autoloading de classe uma só vez.