<?php

// definições de host, database, usuário e senha
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mensagem_usuario";

$nome = $_POST["nome"];
$email = $_POST["email_contato"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO mensagemusuario (nome, email, assunto, mensagem)
VALUES ('$nome', '$email', '$assunto', '$mensagem')";

if (mysqli_query($conn, $sql)) {
?>
  <script>
    window.alert('Email enviado com sucesso');
    window.location.href = "../index.html", 2000;
  </script>

<?php
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
?>
 <script>
    window.alert('Email enviado com sucesso');
    window.location.href = "../index.html", 2000;
  </script>
<?php
}


mysqli_close($conn);

?>