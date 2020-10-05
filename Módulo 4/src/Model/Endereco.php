<?php

namespace Alura\Banco\Model;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */

final class Endereco {

    use AcessoPropriedades;
    
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

    public function __toString(): string {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __get(string $nomeAtributo) {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}