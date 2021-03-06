<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=cadastro">Cadastrar Curriculo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Curriculo</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
    <div class="container">
      <div class="row">
        <div class="col nt-5">
        <?php
          include("config.php");
          switch(@$_REQUEST["page"]){
            case "cadastro":
              include("cadastrar-curriculo.php");
            break;
            case "listar":
              include("listar-curriculo.php");
            break;
            case "salvar":
              include("salvar-curriculo.php");
              break;
              case "editar":
              include("editar-curriculo.php");
              break;
            default:
              print "<h1>Bem Vindos!</h1>";
          }
        ?>
      </div>
    </div>
  </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
