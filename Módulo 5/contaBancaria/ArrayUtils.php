<?php

// O namespace serve para que classes com o mesmo nome não entrem em conflito.
namespace Alura;

class ArrayUtils {
    public static function remover(string $elemento, array $array) {
        $posicao = array_search($elemento, $array);
        if  ($posicao) {
            unset($array[$posicao]); 
      } else {
         echo "Não foi encontrado no array";
      }
    }

    public static function encontrarPessoasComSaldoMaior(int $saldo,array $array): array{
        $correntistasComSaldoMaior = array();
        foreach ($array as $chave => $valor) {
          if($valor > $saldo){
             $correntistasComSaldoMaior[] = $chave;
      }
    }
     return $correntistasComSaldoMaior;
  }
}