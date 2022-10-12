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
    <a class="navbar-brand" href="#">BEM VINDO AO PROGRAMA</a>
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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=novo">Cadastrar-se</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=listar">Listar Usuario(apenas administradores!)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=gastos">Entrar na minha conta</a>
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
     switch(@$_REQUEST["page"]){
        case "novo":
            include("novo-usuario.php");
            break;
        case "listar":
                include("login-adm.php");
                break;    
        case  "salvar" : 
            include("salvar-cadastro.php");   
            break;
        case   "gastos" :
            include("login_usuario.php");     
            break;           
     }   
     ?>
    </div>
 </div>
   
 <h1> <br>"O seu vício é barato?"</h1>
   <img src="img/cristianoronaldosiii.png" width="800">
   <img src="img/Design sem nome.gif" width="380">

</div>


    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>