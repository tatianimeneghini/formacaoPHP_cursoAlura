<?php

// function criarConta(string $cpf, string $titular, float $saldo): array {
//     return [
//     $cpf => [
//         'titular' => $titular,
//         'saldo' => $saldo,
//         ]
//     ];
// }

//Através da programação procedural, ocorre alguns problemas que podem prejudicar o projeto.
// $conta = criarConta('123.456.789-10', 'Vinicius Dias', 500);
// var_dump($conta);

//Para criar um novo tipo, utilizamos a Classe, como um modelo definido.
//Criação da Classe em Orientação a Objetos:
class ContaCorrente {
    //Definir dados da conta a partir da abstração, um dos pilares da POO.
    private string $cpf;
    private string $nome;
    private $saldo; // Somente acessa dentro da classe ContaCorrente.
    // A regra é que sempre as propriedades sejam privadas e só métodos sejam públicos.

    //Função dentro de uma classe é um método.
    //O PHP entende que a definição é pública, mas é importante declarar sempre.
    
    // O evento de criar o objeto de uma classe é chamado método construtor, no PHP.
    // Serve para inicializar, encapsulando atributos, um dos quatro pilares do POO.
    public function __construct(string $cpf, string $nome) {
        echo "Criando uma nova conta." . PHP_EOL;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->saldo = 0; // regra de negócio
    }

    // Métodos que acessam e modificam.
    public function sacar(float $valorSacar) {
        //A variável padrão do PHP $this se refere à referência atual da variável que chamou o método.
        if ($valorSacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 

        // Funções Early Return diz que o importante é retornar o resultado da função o quanto antes
        // Alguns dos benefícios é: aumenta a legibilidade, a performance; facilitar sua manutenção e previnir bugs.        
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

    // Métodos públicos de acesso para exibir.
    // Método get - retorna.
    public function recuperarSaldo(): float { //Retorna o tipo float de variável.
        return $this->saldo;
    }

    // Método set - define.
    // public function definirCPF(string $cpf): void {
    //     $this->cpf = $cpf;
    // }

    public function recuperarCPF(): string {
        return $this->cpf;
    }

    // public function definirNome($nome): void {
    //     $this->nome = $nome;
    // }

    public function recuperarNome(): string {
        return $this->nome;
    }
}