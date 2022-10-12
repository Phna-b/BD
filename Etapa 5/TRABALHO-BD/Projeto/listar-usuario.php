<!DOCTYPE html>
<br><br>
<h1>Lista de Usuarios</h1>
<link rel="stylesheet" href="css/estilo-botao.css">

<?php

include('config.php');

if(!isset($_SESSION)){
    session_start();
}


$sql = "SELECT * FROM usuario";

$res = $conn->query($sql);

$qtd = $res -> num_rows;

if($qtd > 0){
    print "<table class='table table-houver table-striped'>";
        print "<tr>";
        print "<th>Id</th>";   
        print "<th>Nome</th>";
        print "<th>Sobrenome</th>";
        print "<th>E-mail</th>";
        print "<th>Cpf</th>";
        print "<tr>";

    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id;
        print "<td>".$row->nome;
        print "<td>".$row->sobrenome;
        print "<td>".$row->email;
        print "<td>".$row->cpf;
        print "<td>

                 <button oneclick=\"
                 location.href='?page=salvar&acao=excluir&id=".$row->id."';
                } else{false;}\"
                  class = 'btn btn-danger'>Excluir</button>
                 </td>";
        print "</tr>";
    }
    print "</table>";
}

?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.bundle.min.js" ></script>

<body>
    <a class="botao" href="logout.php">SAIR</a>
    
</body>