<?php
declare(strict_types=1);

namespace Alura;

class ArrayUtils
{
    public static function remover(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);
        if (is_int($posicao)) {
            unset($array[$posicao]);
        } else {
            echo 'Não foi encontrado no array';
        }
    }

    public static function encontrarCorrentistasComMaiorsaldo(int $saldo, array $correntistas): array
    {
        $correntistasComMaiorSaldo = array();
        foreach ($correntistas as $chave => $valor) {
            if ($valor > $saldo) {
                $correntistasComMaiorSaldo[] = $chave;
            }
        }

        return $correntistasComMaiorSaldo;
    }
}
