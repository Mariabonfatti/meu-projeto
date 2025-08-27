<?php
$servername = "localhost";
$username   = "desafioUser";
$password   = "SenhaForte123!";
$dbname     = "desafioDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT id, nome, email FROM usuarios";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Lista de Usuários</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>📋 Usuários Cadastrados</h1>
    <div class="card">
      <table>
        <tr><th>ID</th><th>Nome</th><th>E-mail</th></tr>
        <?php
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["email"]."</td></tr>";
          }
        } else {
          echo "<tr><td colspan='3'>Nenhum usuário cadastrado</td></tr>";
        }
        ?>
      </table>
    </div>
    <p><a class="link" href="index.html">⬅️ Voltar ao cadastro</a></p>
  </div>
</body>
</html>
<?php $conn->close(); ?>
