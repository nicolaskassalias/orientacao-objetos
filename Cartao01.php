<?php
class CartaoDeCredito
{
    //atributos
    public $numero;
    public $dataDeValidade;
}

$x = new CartaoDeCredito();
$x->numero = 10;
$x->dataDeValidade= "20/12/2020";
echo "\tNome cartao x: $x->numero" . PHP_EOL;
echo "\tNúmero da conta x: $x->dataDeValidade" . PHP_EOL;
