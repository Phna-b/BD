<?php

if(isset($_POST['senha'])) {

     if(strlen($_POST['senha']) == 0 ){
          echo "digite a senha";      
     } else {
           
          $cpf = $conn->real_escape_string($_POST['cpf']);
          $senha = $conn->real_escape_string($_POST['senha']);

          $sql_code = "SELECT * FROM usuario WHERE cpf='$cpf'AND senha = '$senha'";
          $sql_query = $conn->query($sql_code) or die("falha na execução SQL: ". $conn->error);

          $quantidade = $sql_query->num_rows;

          if($quantidade == 1){
           
               $usuario = $sql_query->fetch_assoc();
               if(!isset($_SESSION)){
                session_start();
               }

                $_SESSION['cpf'] = $id['cpf'];
                header("location: index-usuario.php");
                

          } else {
              echo "Credenciais Invalidas!";
          }
       



     }


}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<br><br><br><br><br><br><br><br>
     <form action="" method="POST" id="formulario" name="formulario">
       <p>

         <label>cpf</label>
         <input type="text" name="cpf" id="cpf">
       <p>
       <p>
         <label>Senha</label>
         <input type="password" name="senha">;
       </p>   
       <p>
       <button type="submit">Entrar</button>
       </p>  
    

     </form>



</body>
</html>