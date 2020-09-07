<?php

class ContaCorrente {
    public static $numeroContas = 0; 
    
    public function __construct(Titular $titular) {
        echo "Criando uma nova conta." . PHP_EOL;
    
        self::$numeroContas++;

        $this->titular = $titular;
        $this->saldo = 0;  
    }

    public function __destruct() {
        if (self::$numeroContas > 2) {
            echo "Há mais de uma conta ativa";
        }
    }

    public function sacar(float $valorSacar):void {
        
        if ($valorSacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 
        $this->saldo -= $valorSacar;       
    }

    public function depositar( $valorADepositar): void {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        } 

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, $contaDestino): void {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
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
}