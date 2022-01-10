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

		<!--modal login e senha-->

  		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        <form action="./backs/controller/ClienteController.php" method="POST">
		          <div class="mb-3">
		            <label for="email" class="col-form-label">Email:</label>
		            <input type="email" class="form-control" id="email" name="email">
		          </div>
		          <div class="mb-3">
		            <label for="senha" class="col-form-label">Senha:</label>
		            <input type="password" class="form-control" id="senha" name="senha">
		          </div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
		        <button type="button" class="btn btn-primary">Entrar</button>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="quemsomos">	
			<section class="about" id="about">
		      <div class="content">
		        <div class="title-wrapper-about">
		          <p>Conheça-nos</p>
		          <h3>Sobre</h3>
		        </div>
		        <div class="about-content">
		          <div class="left">
		            <img src="imagem/pc01.jpg" alt="About" />
		          </div>
		          <div class="right">
		            <h3>Junte tecnologia e mobilidade</h3>
		            <p>
		              Lorem ipsum dolor sit amet consectetur adipisicing elit.
		              Repudiandae ut inventore magni repellendus ab ad itaque facere. A
		              tenetur quam, nobis tempore illum laborum ipsa fuga, itaque
		              possimus repellat ad perspiciatis, velit reiciendis eos facilis
		              sapiente blanditiis quas officia hic beatae quibusdam! Quod
		              eligendi porro possimus voluptatum ad ipsum sapiente soluta,
		              maiores nobis tenetur adipisci officiis nisi illum quae natus
		              nostrum tempora accusantium blanditiis? Rem nesciunt illum
		              dolorum, perferendis quos consequatur suscipit cumque fugiat alias
		              sint repellat qui adipisci error est distinctio doloribus labore
		              sunt modi eos odio quibusdam dicta. Dignissimos voluptate illum
		              possimus quo. Ducimus repellat doloribus quisquam quidem?
		            </p>
		          </div>
		        </div>
		      </div>
		    </section>  			 			
  		</div>
  		<footer>
  			<h3>Feito por turma 2021.2</h3>
  			<p>Técnico de Informática<br>
  				Professor: Clayton Oliveira</p>
  		</footer>					
	</div>	
</body>
</html>