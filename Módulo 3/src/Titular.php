<?php

// Composição de objetos é quando um objeto é formado por outro objeto.

class Titular {
    private string $cpf;
    private string $nome;

    public function __construct(CPF $cpf, $nome) {
        $this->$cpf = $cpf;
        $this->validarNome($nome);
        $this->$nome = $nome;
    }

    public function recuperarCPF(): string {
        return $this->$cpf->recuperarNumero;
    }

    public function recuperarNome(): string {
        return $this->$nome;
    }

    // Refatoração é melhorar o código, sem alterar o comportamento.
    // A função privada é uma validação interna, sem expor seu comportamento.
    private function validarNome(string $nome) {
        if (strlen($nome < 5)) { // tamanho da string
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }

    
}