<?php

switch ($_REQUEST["acao"]){

 case 'cadastrar':
    
    $cigarros_meta = $_POST["cigarros_meta"];
    $cigarros_gasto_mes = $_POST["cigarros_gasto_mes"];
    $cigarro_gasto_mes_meta = $_POST["cigarro_gasto_mes_meta"];
    $tipo = $_POST["tipo"];
    $preco = $_POST["preco"];
    $nome_usuario = $_POST["nome_usuario"];
  
  
   $sql = "INSERT INTO Consumo(cigarros_meta,cigarros_gasto_mes,cigarro_gasto_mes_meta,tipo,preco,nome_usuario)
   VALUES ('{$cigarros_meta}','{$cigarros_gasto_mes}','{$cigarro_gasto_mes_meta}','{$tipo}','{$preco}','{$nome_usuario}')";

  $res = $conn->query($sql);
    break;


    if($res==true){
        print "script>alert('Cadastrado com sucesso');</script>";

         
    }
      
}