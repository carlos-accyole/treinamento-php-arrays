<?php

$saldos = [
  2500,
  3000,
  4400,
  1000,
  8700,
  9000
];

foreach ($saldos as $saldo) {
    echo "<p>O Saldo é $saldo</p>";
}

sort($saldos);//ordenar array
echo "O Menor saldo é $saldos[0]";

//---------------------------------------------------Segunda Parte da Aula----------------------------------------------

$nommes = "Carlos, Jordania, Gabriela, Rafaela";

$array_nomes = explode(',', $nommes);

foreach ($array_nomes as $nomme) {
    echo "<p>Olá $nomme</p>";
}

$nommesJuntos = implode(',', $array_nomes);
echo $nommesJuntos;

//----------------------------------------------------------------------------------------------------------------------


