<?php

switch ($_REQUEST["acao"]){

 case 'cadastrar':
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];


   $sql = "INSERT INTO usuario(nome,sobrenome,email,cpf,senha)
   VALUES ('{$nome}','{$sobrenome}','{$email}','{$cpf}','{$senha}')";

  $res = $conn->query($sql);
    break;


    if($res==true){
        print "script>alert('Cadastrado com sucesso');</script>";

         
    }
      
        case 'excluir':

            $sql = "DELETE FROM usuario WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true)
            {
                print "<script>alert('Excluir com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            else
            {
                print "<script>alert('Nao foi possivel excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
     

}

