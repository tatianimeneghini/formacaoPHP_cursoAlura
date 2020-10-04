<?php

namespace Alura\Banco\Model\Conta;

//Classe abstrata é uma classe que falta outros dados para ser implementada.
abstract class Conta { 
    private $titular;
    private $saldo;
    public static $numeroContas = 0;
    
    public function __construct(Titular $titular) {
        echo "Criando uma nova conta." . PHP_EOL;
    
        self::$numeroContas++;

        $this->titular = $titular;
        $this->saldo = 0;  
        $this->tipo;
    }

    public function __destruct() {
        if (self::$numeroContas > 2) {
            echo "Há mais de uma conta ativa";
        }
    }

    public function sacar(float $valorASacar):void {       
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 
        $this->saldo -= $valorSaque;       
    }

    public function depositar( $valorADepositar): void {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        } 

        $this->saldo += $valorADepositar;
    }

    public function recuperarSaldo(): float {
        return $this->saldo;
    }

    public function recuperarNomeTitular(): string {
        return $this->titular->recuperarNome();
    }

    public function recuperarCPFTitular(): string {
        return $this->titular->recuperarCPF();
    }

    public static function recuperarNumeroContas(): init {
        return self::$numeroContas;
    }

    abstract protected function percentualTarifa(): float;
}