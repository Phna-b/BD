<!DOCTYPE html>
<br><br>
<h1>Lista de Consumo dos Usuarios</h1>
<link rel="stylesheet" href="css/estilo-botao.css">

<?php

if(!isset($_SESSION)){
    session_start();
}


$sql = "SELECT * FROM Consumo WHERE id";

$res = $conn->query($sql);

$qtd = $res -> num_rows;

if($qtd > 0){
    print "<table class='table table-houver table-striped'>";
        print "<tr>";
        print "<th>Nome de Usuario</th>";
        print "<th>Tipo</th>";
        print "<th>Preço do Cigarro</th>";
        print "<th>Meta De Consumo no Final do Mes</th>";
        print "<th>Dinheiro Atualmente Gasto Cigarro no Mes</th>";
        print "<th>Meta De Dinheiro Gasto Cigarro Final do Mes</th>";
        print "<tr>";

    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->nome_usuario;
        print "<td>".$row->tipo;
        print "<td>".$row->preco;
        print "<td>".$row->cigarros_meta;
        print "<td>".$row->cigarros_gasto_mes;
        print "<td>".$row->cigarro_gasto_mes_meta;
        


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