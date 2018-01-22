<?php
class Funcionario{
    public $nome;
    public $salario;
}
$x = new Funcionario();
$x->nome="Marcelo da Silva";
$x->salario=2304.51;
//
echo "\n\tNome: $x->nome". PHP_EOL;
echo "\n\tSalario: $x->salario".PHP_EOL;

?>
