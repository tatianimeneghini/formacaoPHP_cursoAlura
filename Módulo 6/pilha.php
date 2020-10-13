<?php

// A stack (pilha) é composta pelo main e outras funções em ordem de execução.

// Existem dois tipos de função:
// - Declaração de símbolos (funcao1);
// - Execução (funcao2).

// Depuração
// A função var_dump() mostra o tipo e o valor de uma execução.
// Exemplo: var_dump(debug_backtrace); que excuta e visualiza a organização da pilha.
// Outra alternativa é o print_r(); de maneira mais amigável.

// Toda exceção em PHP possui um nome que a identifica, tornando seu entendimento mais fácil.

// É possível em um único bloco de código try lidar com mais de um problema de uma só vez.
// Os desenvolvedores do PHP, na versão 7.1, introduzirem o multi-catch.
// A sintaxe é utilizando um pipe (|) na cláusula catch.
// Exemplo: catch (RuntimeException | DivisionByZeroError $problema)

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    
    try { // Tente isso
        echo 'Entrei na função 1' . PHP_EOL;
        funcao2();
    // } catch (RuntimeException $exception) { // Se der erro
    //     echo "Na função 1, eu resolvi o problema na função 2" . PHP_EOL;
    // } catch (DivisionByZeroError $erro) {
    //     echo "Erro ao dividir um número por 0" . PHP_EOL;
    } catch (RuntimeException | DivisionByZeroError $erroOuExcecao) { // multi-catch (versão 7.1)
        echo $erroOuExcecao->getMessage() . PHP_EOL; // retorna a mensagem do problema
        echo $erroOuExcecao->getLine() . PHP_EOL; // linha que o problema aconteceu
        echo $erroOuExcecao->getTraceAsString() . PHP_EOL; // linha da pilha de execução no formato string
        // throw new RuntimeException( // atributos
        //     'Exceção foi tratada, mas pega aí',
        //     1,
        //     $erroOuExcecao 
        // );
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    throw new RuntimeException('Essa é a mensagem de exceção');
    echo 'Saindo da função 2' . PHP_EOL;
}

// Main que inicializa a execução do código.
echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;