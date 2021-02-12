<?php
     // definições de host, database, usuário e senha
     $host = "localhost";
     $db   = "mensagem_usuario";
     $user = "root";
     $pass = "";

//Recebendo dados do candidato

     $email = $_POST["email"];
     $name = $_POST["name"];
     $senha = $_POST["password"];
     $passconfirmation = $_POST["passconfirmation"];
     
     $link_github = $_POST["link_github"];
     $link_linkedin = $_POST["link_linkedin"];

     $vaga_soft_engineer = $_POST["soft_engineer"];
     $vaga_ui_designer = $_POST["ui_designer"];
     $vaga_ux_designer = $_POST["ux_designer"];
     $vaga_project_manager = $_POST["project_manager"];
     
     $agreement = $_POST["agreement"];


         // Cria a conexão com o banco de dados
          $conn = mysqli_connect($host, $user, $pass, $db);
          // Verifica a conexão
          if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
          }

          //Cadastro
          if ($senha == $passconfirmation){ //Verifica se a senha e a confirmação da mesma são iguais
               if ($agreement == True) {    //Verifica se os termos de uso foram aceitos
                $search = mysqli_query($conn, "SELECT * FROM cadastro_vagas WHERE email = '$email'"); //Verifica no banco de dados se o usuário já existe
                    if(@mysqli_num_rows($search) > 0){ //Se ja existir um usuario aparece uma mensagem via javascript 
                         echo "<script> window.alert('Este usuário já existe')</script>"; //Mesangem de usuario existente
                    }else{
                         $hash_password =  password_hash($senha, PASSWORD_DEFAULT); //Transforma a variavel senha em um hash da mesma

                         mysqli_query($conn, "INSERT INTO cadastro_vagas (email, nome, senha, link_github, link_linkedin,vaga_soft_engineer,vaga_ui_designer,vaga_ux_designer,vaga_project_manager) values('$email','$name','$hash_password','$link_github','$link_linkedin','$vaga_soft_engineer','$vaga_ui_designer','$vaga_ux_designer','$vaga_project_manager')"); //Adiciona ao banco de dados os dados do usuario e a qual(is) vagas deseja concorrer
                         
                         $verifica_cadastro = mysqli_query($conn, "SELECT * FROM cadastro_vagas WHERE email = '$email'"); //Procura pelo usuario recém cadastrado

                         if(@mysqli_num_rows($verifica_cadastro) > 0){ //Verifica se o usuario recém cadastrado foi adicionado com sucesso ao banco de dados
                              echo "<script> window.alert('Cadastro Feito com Sucesso') </script>";//Mostra um alerta para o usuário que o cadastro dele foi adicionando ao banco de dados com sucesso 
                              header('Location: login_vaga.php');

                         }else{
                              echo "<script> window.alert('Houve um erro no cadastro. Reenvie-o novamente') </script>";//Mostra um alerta para o usuário caso o seu cadastro não tenha sido adicionando ao banco de dados;
                              
                         }
               }

          }else{
               echo 'É necessário aceitar os termos de uso para realizar o cadastro em nossa agência'; // Mostra um alerta ao usuário caso ele não tenha aceitado os termo de uso da empresa
          }
          
          }else{
          echo 'As suas senhas estão diferentes, confira-as novamente'; //Mostra uma alerta para o usuário caso a senha e a senha de confirmação estejam diferentes
          }

          
     mysqli_close($conn);
?>