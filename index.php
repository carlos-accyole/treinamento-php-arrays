<?php
declare(strict_types=1);

namespace Alura;

require_once 'autoload.php';

//-------------------------------------------------Primeira Aula notas--------------------------------------------------
$notas = [9, 3, 10 ,5, 10, 8];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);


if ($media) {
    echo "<p>A Média é: {$media}</p>";
} else {
    echo "<p>Não foi possível calcular a média</p>";
}

//----------------------------------------------------------------------------------------------------------------------

//---------------------------------------------------------3ª Aula------------------------------------------------------

$correntitas_e_compras = [
    "Carlos",
    "Accyole",
    12,
    "Gabriela",
    25,
    "Rafaela",
    "Jordania",
    "12"
];


var_dump($correntitas_e_compras);

ArrayUtils::remover('12', $correntitas_e_compras);

var_dump($correntitas_e_compras);

//-------------------------------------------------4ª Aula Array Associativo--------------------------------------------

$correntistas = [
    'Carlos',
    'Accyole',
    'Gabriela',
    'Rafaela',
    'Jordania',
    'Henrique'
];

$correntistasNaoPagantes = [
    'Accyole',
    'Gabriela',
    'Rafaela'
];

$correntitasPagantes = array_diff($correntistas, $correntistasNaoPagantes);
var_dump($correntitasPagantes);

$correntistas = [
    'Carlos',
    'Accyole',
    'Gabriela',
    'Rafaela',
    'Jordania',
    'Henrique'
];

$saldos = [
  2500,
  3000,
  4400,
  1000,
  8700,
  9000
];

$realcionados = array_combine($correntistas, $saldos);

if (array_key_exists('Accyole', $realcionados)) {
    echo "O saldo de Accyole é: {$realcionados['Accyole']}";
} else {
    echo "Não foi possível encontrar";
}

$correntistasComMaiorSaldo = ArrayUtils::encontrarCorrentistasComMaiorsaldo(3000, $realcionados);

var_dump($correntistasComMaiorSaldo);


