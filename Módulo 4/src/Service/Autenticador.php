<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Autenticavel;

class Autenticador {
    public function logar($autenticavel, string $senha): void {
        if ($autenticavel->podeAutenticar($senha)) {
            echo 'Usuário logado no sistema';
        } else {
            echo 'Ops! Senha incorreta';
        }
    }
}