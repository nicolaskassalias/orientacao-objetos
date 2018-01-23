<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        require 'Cliente01.php';
        $cliente=new Cliente01();
        $cliente->nome = $_POST['nome'];
        $cliente->email = $_POST['email'];

    //
    $string01=mysqli_connect('localhost','root','senha','teste01') or die('Erro Conenect');

    $sql="SELECT * FROM cadastro";
    //mysqli_query($string01,$sql) or die('Erro SELECT');
    $result = $string01->query($sql);
//    echo "$result->num_rows ";
    //echo "$result->num_rows " . $result->num_rows ;


//$sql = "SELECT id, firstname, lastname FROM MyGuests";
//$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "Nome: " . $row["nome"]. " - email: " . $row["email"]. " "  "<br>";
      echo "Nome: ". $row["nome"] . " - " .$row["email"] . "<br>";
    }
} else {
    echo "0 results";
}
//
    $sql="INSERT INTO cadastro VALUES";
    $sql .= "('$cliente->nome','$cliente->email')";
    mysqli_query($string01,$sql) or die('Erro');
    mysqli_close($string01);
    echo "Inseriu com Sucesso!";


    ?>

  </body>
</html>
