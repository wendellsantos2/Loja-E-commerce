<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Projeto Objeto</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="estilo.css">


</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../../imagem/imagem01.png" width="70" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="painel.php">Controle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadusuario.php">Usuários</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadproduto.php">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="consultarProduto.php">Consultar Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vercliente.php">Clientes</a>
            </li>  
             <li class="nav-item">
              <a class="nav-link" href="vercompras.php">Compras</a>
            </li>          
            <li class="nav-item">
              <a class="nav-link" href="sair.php">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <header>
      <h1>Painel de Controle</h1>
      <?php
        include '../../php/conexao.php';
       session_start();
        $logado = $_SESSION["nomeUsuario"];
        echo "Funcionário: ".$logado;
      ?>
    </header>
      
    </div>
    

</body>
</html>