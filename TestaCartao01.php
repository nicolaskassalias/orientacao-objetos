<?php

require 'lib/Carbon.php'; //usa lib
require 'Cartao02.php'; //usa lib
use Carbon\Carbon;

$x = new CartaoDeCredito();
$x->nome ="Maria da Silva";
$x->numero = 10;
$x->dataDeValidade=Carbon::createFromDate(1975, 5, 21,'America/Sao_Paulo');

echo "\tNome cartao x: $x->nome" . PHP_EOL;
echo "\tNúmero da conta x: $x->numero" . PHP_EOL;


echo "\tData da conta x: $x->dataDeValidade" . PHP_EOL;
//$x->dataDeValidade= "20/12/2020";
/*
Carbon::createFromDate(1975, 5, 21,'America/Sao_Paulo');
echo "\tNome cartao x: $x->numero" . PHP_EOL;
echo "\tNúmero da conta x: $x->dataDeValidade" . PHP_EOL;
echo "\tData da conta x: $x->dataDeValidade" . PHP_EOL;
*/
