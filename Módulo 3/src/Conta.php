<?php

// function criarConta(string $cpf, string $titular, float $saldo): array {
//     return [
//     $cpf => [
//         'titular' => $titular,
//         'saldo' => $saldo,
//         ]
//     ];
// }

// Através da programação procedural, ocorre alguns problemas que podem prejudicar o projeto.
// $conta = criarConta('123.456.789-10', 'Vinicius Dias', 500);
// var_dump($conta);

// Para criar um novo tipo, utilizamos a Classe, como um modelo definido.
// Criação da Classe em Orientação a Objetos:
class ContaCorrente {
    //Definir dados da conta a partir da abstração, um dos pilares da POO.
    public static $numeroContas = 0; // acessar a classe.
    // Membros estáticos são membros da classe em si, e não de cada instância (objeto).
    
    private string $cpf;
    private string $titular; // Somente acessa dentro da classe ContaCorrente.
    // A regra é que sempre as propriedades sejam privadas e só métodos sejam públicos.

    // Função dentro de uma classe é um método.
    // O PHP entende que a definição é pública, mas é importante declarar sempre.
    
    // O evento de criar o objeto de uma classe é chamado método construtor, no PHP.
    // Serve para inicializar, encapsulando atributos, um dos quatro pilares do POO.
    public function __construct(Titular $titular) {
        echo "Criando uma nova conta." . PHP_EOL;
    
        //ContaCorrente::$numeroContas++; // incrementar
        self::$numeroContas++;

        $this->titular = $titular;
        $this->saldo = 0; // regra de negócio   
    }

    // Método destutor
    // No PHP, existe um método chamado garbage selector/destrutor que remove um objeto/instância deixa de existir.
    public function __destruct() {
        if (self::$numeroContas > 2) {
            echo "Há mais de uma conta ativa";
        }
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