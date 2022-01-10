<?php
  include_once ("./backs/conexao/Conexao.php");
  include_once ("./backs/dao/ClienteDAO.php");
  include_once ("./backs/model/Cliente.php");

  //instancia as classes
  $cliente = new Cliente();
  $clientedao = new ClienteDAO(); 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="script/script.js"></script>
    <title>Projeto Objeto</title>
  </head>
  <body>
    <div class="container">
    <header>
      <h1>Projeto Objeto</h1>
    </header>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="imagem/imagem01.png" width="70" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quemsomos.php">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nossosprodutos.php">Nossos Produtos</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#">Cadastro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>  

    
    
    <div class="formulario">  
      <form action="./backs/controller/ClienteController.php" method="POST" class="row g-3">
        <span>* Preenchimento Obrigatório</span>
        <div class="col-md-6">
          <label for="nome" class="form-label">Nome Completo<span>*</span></label>
          <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="col-md-6">
          <label for="cpf" class="form-label">CPF<span>*</span></label>
          <input type="text" class="form-control" id="CPF" name="cpf" required maxlength="11"
          placeholder="somente números" onblur="formataCPF(this)">
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">E-mail<span>*</span></label>
          <input type="email" class="form-control" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
              title="preencha o email corretamente ex: email@email.com"
              required>
        </div>
        <div class="col-md-6">
          <label for="senha" class="form-label">Senha<span>*</span></label>
          <input type="password" class="form-control" id="senha" name="senha" required maxlength="20"
          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Deve conter pelo menos um número e uma letra maiúscula e minúscula e pelo menos 8 ou mais caracteres">
        </div>
        <div class="col-md-6">
          <label for="telefone" class="form-label">Telefone<span>*</span></label>
          <input type="text" class="form-control" id="telefone" name="telefone" required maxlength="11"
          onblur="formataTelefone(this)"  placeholder="somente números">
        </div>
        <fieldset class="col-md-6">
          <legend class="col-form-label col-sm-2 pt-0">Sexo<span>*</span></legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sexo" id="sexo" value="0" checked>
              <label class="form-check-label" for="sexo">
                Masculino
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sexo" id="sexo" value="1">
              <label class="form-check-label" for="sexo">
                Feminino
              </label>
            </div>
          </div>
        </fieldset>
        <div class="col-md-5">
          <label for="cep" class="form-label">Digite seu CEP<span>*</span></label>
          <input type="text" class="form-control" id="cep" name="cep" required maxlength="8" onblur="pesquisacep(this.value); formataCEP(this)" placeholder="somente números" >
        </div>
        
        <div class="col-md-8">
          <label for="logradouro" class="form-label">Logradouro<span>*</span></label>
          <input type="text" class="form-control" id="logradouro" name="logradouro" required>
        </div>
        <div class="col-md-4">
          <label for="numero" class="form-label">Número<span>*</span></label>
          <input type="number" class="form-control" id="numero" name="numero" required>
        </div>
        <div class="col-md-4">
          <label for="complemento" class="form-label">Complemento<span>*</span></label>
          <input type="text" class="form-control" id="complemento" name="complemento" required>
        </div>
        <div class="col-md-4">
          <label for="bairro" class="form-label">Bairro<span>*</span></label>
          <input type="text" class="form-control" id="bairro" name="bairro" required>
        </div>
        <div class="col-md-4">
          <label for="cidade" class="form-label">Cidade<span>*</span></label>
          <input type="text" class="form-control" id="cidade" name="cidade" required>
        </div>
        <div class="col-md-4">
          <label for="uf" class="form-label">Estado<span>*</span></label>
          <input type="text" class="form-control" id="uf" name="uf" required maxlength="2">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
        </div>
     </form>
    </div>
      <footer>
        <h3>Feito por turma 2021.2</h3>
        <p>Técnico de Informática<br>
          Professor: Clayton Oliveira</p>
      </footer>         
  </div>  
  </body>
</html>
