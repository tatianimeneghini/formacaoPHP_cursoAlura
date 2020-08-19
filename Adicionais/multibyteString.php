<?php

//Tamanho da string consome 1 byte, segundo o modelo da tabela ASCII.
//Por isso que os caracteres com acentuação não entram, pois são 2 bytes.

$string = 'Testes de integração com PHP';

echo strlen($string) . PHP_EOL; 
//Contabiliza o número de bytes, não de caracteres.
//É possível habilitar a extensão (Multibyte) <mb_strlen>.
echo strtoupper($string);
//Transforma os caracteres em letra maiúsculas. 
//Na extensão MB, transforma também os caracteres com acentuação.

//A função <mb_convert_case($string, MB_CASE_TITLE);> mostra diversas funções da extensão.
//Documentação: <https://www.php.net/manual/pt_BR/book.mbstring.php>.