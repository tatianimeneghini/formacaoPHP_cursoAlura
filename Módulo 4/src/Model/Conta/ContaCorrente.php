<?php

namespace Alura\Banco\Model\Conta;

class ContaCorrente extends Conta {
    protected function percentualTarifa(): float {
        return 0.05;
    }

    public function transferir(float $valorATransferir, $contaDestino): void {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}