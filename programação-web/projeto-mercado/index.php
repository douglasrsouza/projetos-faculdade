<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Mercado</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mercado</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categoria
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="?page=cadastrar-categoria">Cadastrar Categoria</a></li>
            <li><a class="dropdown-item" href="?page=listar-categoria">Listar Categoria</a></li>
          </ul>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produto
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="?page=cadastrar-produto">Cadastrar Produto</a></li>
            <li><a class="dropdown-item" href="?page=listar-produto">Listar Produto</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <?php
            include("config.php");

            switch (@$_REQUEST["page"]) {
              case 'cadastrar-categoria':
                include("cadastrar-categoria.php");
                break;
              case 'listar-categoria':
                include("listar-categoria.php");
                break;
                case 'salvar-categoria':
                include("salvar-categoria.php");
                break;
                case 'editar-categoria':
                include("editar-categoria.php");
                break;
                case 'cadastrar-produto':
                include("cadastrar-produto.php");
                break;
                case 'listar-produto':
                include("listar-produto.php");
                break;
                case 'salvar-produto':
                include("salvar-produto.php");
                break;
                case 'editar-produto':
                include("editar-produto.php");
                break;
              
              default:
                print "<h1>Seja bem vindo</h1>";
            }

          ?>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>