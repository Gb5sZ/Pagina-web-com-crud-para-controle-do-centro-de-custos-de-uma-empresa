<!doctype html>


<html lang="pt-BR">
  <head>
    <style>
        body{
          background-image: url('background.jpg');
          
          height: 100vh;
          display: flex;
         
        }
        img       {
          width: 30px;
        }
        .col{
            padding: -9rem;
        }        
                        
    </style>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <title>Cadastrar</title>
  </head>
  <body>

       <div class="col"> 
          <?php
session_start();
include('verifica_login.php');
?>  
      </div>
  <nav class="navbar bg-light fixed-top">
  
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><b><img src="download.png"></b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Controle de PA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="" href="index.php">Pagina Inicial</a>
      </li>

          <li class="nav-item">
            <a class="nav-link" href="?page=novo">Cadastrar PA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=listar">Situaçao</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=novo_cc">Cadastrar Centro de Custo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=listar_cc">Centros de custos</a>
          </li>
          
          
        </ul>
        
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
                        include("cadastrar.php");
                    break;
                    case "listar":
                    include("listar.php");
                    break;
                    case"salvar";
                        include("salvar.php");
                    break;
                    case"editar";
                        include("editar.php");
                    break;
                    case"novo_cc";
                        include("cadastrar_cc.php");
                    break;
                    case"listar_cc";
                        include("listar_cc.php");
                    break;
                    case"salvar_cc";
                        include("salvar_cc.php");
                    break;
                    case"editar_cc";
                        include("editar_cc.php");
                    break;
                default:
                    print "<h1></h1>";
        }   
        ?>

            </div>

        </div>


    </div> 


      

  
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>