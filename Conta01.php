<?php
class Conta
{
    //atributos
    public $nome;
    public $numero;
    public $saldo;
}

$x = new Conta();
$x->nome = "Maria da Silva";
$x->numero = 10;
$x->saldo = 1500.43;
echo "\tNome cliente da conta x: $x->nome" . PHP_EOL;
echo "\tNúmero da conta x: $x->numero" . PHP_EOL;
echo "\tNúmero do saldo x: $x->saldo" . PHP_EOL;
//
$x1 = new Conta();
$x1->nome = "José Duarte";
$x1->numero = 20;
$x1->saldo = 3500.32;
echo "\n\n";
//echo "\tNome cliente da conta x1: $x1->nome" . PHP_EOL;
echo "\tNome cliente da conta x1: $x1->nome\n" ;
echo "\tNúmero da conta x1: $x1->numero" . PHP_EOL;
echo "\tNúmero do saldo x1: $x1->saldo" . PHP_EOL;
