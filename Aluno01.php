<?php
class Aluno{
  public $nome;
  public $rg;
  public $dataNascimento;
//  public void imprimirAluno($x){
//    echo "\n\tOi\n";
//  }
}
$x = new Aluno();
$x->nome="Odair Rodrigues";
$x->rg="123456";
$x->dataNascimento="26/11/1930";

echo "\n\tNome aluno x: $x->nome\n";
echo "\n\tRg aluno x: $x->rg" . PHP_EOL;
echo "\n\tNasc. aluno x: $x->dataNascimento\n";




 ?>
