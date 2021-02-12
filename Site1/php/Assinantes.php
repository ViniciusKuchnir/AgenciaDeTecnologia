<?php
    $host = "localhost";
    $db   = "mensagem_usuario";
    $user = "root";
    $pass = "";

    //Recebendo o email
    $email = $_POST['email'];

    // Cria a conexão com o banco de dados
    $conn = mysqli_connect($host, $user, $pass, $db);
    // Verifica a conexão
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    if($email != ''){
        $search = mysqli_query($conn, "SELECT * FROM assinantes WHERE email = '$email'"); //Verifica no banco de dados se o usuário já existe
        if(@mysqli_num_rows($search) > 0){ //Se ja existir um usuario aparece uma mensagem de erro via javascript 
        echo "<script> window.alert('Este usuário já existe')</script>"; //Mesangem de usuario existente
    }else{
        mysqli_query($conn, "INSERT INTO assinantes (email) values('$email')"); //Adiciona ao banco de dados o email do assinante
        echo "<script> window.alert('Obrigado pela assinatura! :)')</script>"; //Mesangem de usuario existente
    }
    }else{
        echo "<script> window.alert('Preencha o campo email')</script>";
    }

    //Encerra a conexão
    mysqli_close($conn);

?>