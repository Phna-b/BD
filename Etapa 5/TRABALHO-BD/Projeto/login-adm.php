<?php

if(isset($_POST['senha'])) {

     if(strlen($_POST['senha']) == 0 ){
          echo "digite a senha de ADM";      
     } else {

          $senha = $conn->real_escape_string($_POST['senha']);

          $sql_code = "SELECT * FROM adm WHERE senha = '$senha'";
          $sql_query = $conn->query($sql_code) or die("falha na execução SQL: ". $conn->error);

          $quantidade = $sql_query->num_rows;

          if($quantidade == 1){
           
               $usuario = $sql_query->fetch_assoc();
               if(!isset($_SESSION)){
                session_start();
               }

                $_SESSION['Login'] = $login['login'];
                header("location: listar-usuario.php");
                

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
    <title>Login adm</title>
</head>
<body>
<br><br><br><br><br><br><br><br>
     <form action="" method="POST">
       <p>

         <label>login</label>
         <input type="text" name="login">
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