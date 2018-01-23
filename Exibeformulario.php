<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Meu Título</title>
  </head>
  <body>
    <?php
        require 'Cliente01.php';
        $cliente=new Cliente01();
        $cliente->nome = $_POST['nome'];
        $cliente->email = $_POST['email'];
    ?>
        <h1>Cliente01</h1>

        <h3>Nome: <?= $cliente->nome ?></h3>
        <h3>Nome: <?= $cliente->nome ?></h3>
        <h3>Email: <?= $cliente->email ?></h3>

  </body>
</html>
