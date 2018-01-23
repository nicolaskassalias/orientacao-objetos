<?php
    require 'Cliente01.php';
    $cliente=new Cliente01();
    $cliente->nome = $_POST['nome'];
    $cliente->email = $_POST['email'];

//
$string01=mysqli_connect('localhost','root','senha','teste01') or die('Erro');
$sql="INSERT INTO cadastro VALUES";
$sql .= "('$cliente->nome','$cliente->email')";
mysqli_query($string01,$sql) or die('Erro');
mysqli_close($string01);
echo "Sucesso!";


?>
