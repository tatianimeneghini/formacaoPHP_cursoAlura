<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\recuperarEndereco;

class Titular extends Pessoa implements Autenticavel { // a classe extende a outra.
    private Endereco $endereco;

    public function __construct(CPF $cpf, $nome, Endereco $endereco) {
        parent:: __construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperarEndereco(): Endereco {
        return $this->endereco;
    }

    public function podeAutenticar (string $senha): bool {
        return $senha === 'abcd';
    }
    
}