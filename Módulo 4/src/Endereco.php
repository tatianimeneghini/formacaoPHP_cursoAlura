<?php

class Endereco {
    private string $rua;
    private string $numero;
    private string $bairro;
    private string $cidade;

    public function __constructor($rua, $numero, $bairro, $cidade) {
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
    }

    public function recuperarRua(): string {
        return $this->rua;
    }

    public function recuperarNumero(): string {
        return $this->numero;
    }

    public function recuperarBairro(): string {
        return $this->bairro;
    }

    public function recuperarCidade(): string {
        return $this->cidade;
    }
}