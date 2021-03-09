<?php

namespace Alura;

class Calculadora
{
    /**
     * @param array $notas
     * @return float|null
     */
    public function calculaMedia(array $notas): ?float
    {
        $quantidadesNotas = sizeof($notas);

        if ($quantidadesNotas) {

        $soma = 0;
        for ($i = 0; $i < $quantidadesNotas; $i++) {
            $soma += $notas[$i];
        }
        $media = $soma / $quantidadesNotas;
        return $media;

        } else {
            return null;
        }

    }
}
