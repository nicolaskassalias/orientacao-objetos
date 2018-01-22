<?php
class Curso
{
    //atributos
    public $nome;
    public $sala;
}

$x = new Curso();
$x->nome = "Maria da Silva";
$x->sala = 10;
echo "\tNome aluno do curso x: $x->nome" . PHP_EOL;
echo "\tSala aluno do curso x: $x->sala" . PHP_EOL;
