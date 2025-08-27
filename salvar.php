<?php
$servername = "localhost";
$username   = "desafioUser";
$password   = "SenhaForte123!";
$dbname     = "desafioDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

$nome  = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
if ($conn->query($sql) === TRUE) {
  echo "Usuário cadastrado com sucesso!<br>";
  echo "<a href='index.html'>Voltar</a>";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
