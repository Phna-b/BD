<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Programa</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="pagee" href="index-usuario.php">Home usuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagee=gastos-usu">Cadastrar Gastos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagee=listarr">Lista Gastos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="logout.php">SAIR</a>
          </li> 
        </ul>
        </form>
      </div>
    </div>
  </div>
</nav>

<div class="container">
 <div class="row">
    <div class="col mt-5">
        <?php
        include("config.php");
     switch(@$_REQUEST["pagee"]){
        case "gastos-usu":
            include("cadastro-gasto-usu.php");
            break;
        case "listarr":
                include("lista-de-consumo.php");
                break;    
        case  "salvar" : 
            include("salvar-cadastro-usu.php");   
            break;
         
     }   
     ?>
    </div>
 </div>
   
 <h1> <br>"GASTOS $$$"</h1>
   <img src="img/Design sem nome.gif" width="380">

</div>


    <script src="js/bootstrap.bundle.min.js" ></script>


</html>