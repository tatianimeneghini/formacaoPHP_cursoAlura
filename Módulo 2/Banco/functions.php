<?php

echo "Olá, arquivo de funções aqui" . '<br>';

function exibeMensagem (string $mensagem) {
    echo $mensagem . '<br>';
}

//O PHP reconhece a função, porém modifica a cópia do array.
//Para modificar o array original, é só inserir o & antes.
// function titularComLetrasMaiusculas (array &$conta) {
//     $conta['titular'] = strtoupper($conta['titular']); //Função que coloca todas letras em maiúscula em uma string.
// }
//Isso ocorre porque passamos um valor para a função como referência, por isso a modificação
//  subsititui a variável original, sem a necessidade de retornar um valor.
//É uma forma que pode prejudicar, já que altera o valor original, então não é uma boa escolha em algumas situações.

function sacar (array $conta, float $valorSaque) {
    if ($valorSaque > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor!");
    } else {
        $conta['saldo'] -= $valorSaque;
    }
    return $conta;
}

function depositar (array $conta, float $valorDepositar) {
    if ($valorDepositar > 0) {
        $conta['saldo'] += $valorDepositar;
    } else {
        exibeMensagem("Valores negativos não são depositados.");
    }
    return $conta;
}

// function exibeConta (array $conta) {
//     ['titular' => $titular, 'saldo' => $saldo] = $conta;
//     echo "<li>Titular: $titular. Saldo: $saldo</li>";
// }

//É possível informar ao PHP o final do bloco de códigos na linguagem, para adotar um texto.
//Para iniciar o padrão do HTML é só digitar ! e apertar a tecla tab.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Alura</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>