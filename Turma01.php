<?php
class Turma{
    public $periodo;
    public $serie;
    public $sigla;
    public $tipoDeEnsino;
}
$x = new Turma();
$x->periodo="Tarde";
$x->serie=8;
$x->sigla = "A";
$x->tipoDeEnsino="Fundamental";
//
echo "\n\tPeríodo: $x->periodo". PHP_EOL;
echo "\n\tSérie: $x->serie".PHP_EOL;
echo "\n\tSigla: $x->sigla".PHP_EOL;
echo "\n\tTipo de Ensino: $x->tipoDeEnsino".PHP_EOL;

?>
