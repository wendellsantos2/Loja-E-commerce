<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Projeto Objeto</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
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
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Cadastro
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		            <li><a class="dropdown-item" href="cadcliente.php">Cadastro de Clientes</a></li>
		            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Logar</a></li>
		            <li><a class="dropdown-item" href="backs/telas/login.php">Admin</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>	 
	

		<div class="imagens">		
  			<div class="row">
    			<div class="col">
    			</div>
    			<div class="col">
    				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
		  				<div class="carousel-inner">
		    				<div class="carousel-item active">
		      					<img class="carousel" src="imagem/pc01.jpg" class="d-block w-100" alt="pc01">
		    				</div>
		    				<div class="carousel-item">
		      					<img class="carousel" src="imagem/pc02.jpg" class="d-block w-100" alt="pc02">
		    				</div>
		    				<div class="carousel-item">
		      					<img class="carousel" src="imagem/pc03.jpg" class="d-block w-100" alt="pc03">
		    				</div>
		  				</div>
					  		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
					    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    		<span class="visually-hidden">Previous</span>
					  		</button>
					  		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
					    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
					    		<span class="visually-hidden">Next</span>
					  		</button>
					</div>	
				</div>
				<div class="col">
    			</div>	
    		</div>    			
  		</div>

  		<!--modal login e senha-->

  		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        <form action="./backs/telas/loginCliente.php" method="POST">
		          <div class="mb-3">
		            <label for="email" class="col-form-label">Email:</label>
		            <input type="email" class="form-control" id="email" name="email">
		          </div>
		          <div class="mb-3">
		            <label for="senha" class="col-form-label">Senha:</label>
		            <input type="password" class="form-control" id="senha" name="senha">
		          </div>
		           <div class="modal-footer">
		        		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
		        		<button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
		      		</div>
		        </form>
		      </div>
		     
		    </div>
		  </div>
		</div>


  		
  		<footer>
  			<h3>Feito por turma 2021.2</h3>
  			<p>Técnico de Informática<br>
  				Professor: Clayton Oliveira</p>
  		</footer>					
	</div>	
</body>
</html>