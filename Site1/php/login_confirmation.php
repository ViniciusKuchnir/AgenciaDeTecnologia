<?php
    // definições de host, database, usuário e senha
    $host = "localhost";
    $db   = "mensagem_usuario";
    $user = "root";
    $pass = "";
//Recebendo as variaveis
 $email_login = $_POST['email_login'];
 $senha_login = $_POST['senha_login'];

 
// conecta ao banco de dados
$conn = mysqli_connect($host, $user, $pass); 
// seleciona a base de dados a se trabalhar
mysqli_select_db($conn, $db);
// Instrução SQL que vai selecionar os dados
$query = sprintf("SELECT  email,senha,nome FROM cadastro_vagas WHERE email = '$email_login' LIMIT 1");
// executa a query
$dados = mysqli_query($conn, $query) or die(mysqli_error($conn));
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

if($linha['email'] == $email_login && password_verify($senha_login, $linha['senha'])){ //Verifica se o usuário e senha existe 
    echo "Seja bem vindo(a) novamente ". $linha['nome']; // Caso exista mostra a mensagem de boas vindas
}else{
    echo "<script> window.alert('Ops! Usuário ou senha inválida.') 
                    window.location.href = 'login_vaga.php';
          </script>";//Mostra um alerta para o usuário dizendo que o mesmo não foi encontrado e redireciona-o;
}





?>


    
    

