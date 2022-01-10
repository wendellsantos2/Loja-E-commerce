<?php

	include_once "../conexao/Conexao.php";
	include_once "../dao/UsuarioDao.php";
	include_once "../model/Usuario.php";

	//instancia as classes
	$usuario = new Usuario();
	$usuariodao = new UsuarioDao();
  
?>
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
    <style>
      table th{
        text-align: center;
      }
      table td{
        text-align: center;
      }
      h3{
        text-align: center;
      }
    </style>
</head>
<body>
	<?php
		include 'painel.php';
	?>
	<div class="container">
    <header>
      <h3>Cadastro de Usuários</h3>
    </header>
		<section class="formulario">

      			<form action="../controller/UsuarioController.php" method="POST">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" required>
              </div>
              <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" class="form-control" id="login" aria-describedby="emailHelp" name="login" required>
              </div>
              <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
              </div>
              <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
            </form>
      			<hr>

            <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome do Usuario</th>
                        <th>Login</th>
                        <th>Senha</th>
                        <th>Controle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuariodao->read() as $usuario) : ?>
                        <tr>
                            <td><?= $usuario->getIdUsuario() ?></td>
                            <td><?= $usuario->getNomeUsuario() ?></td>
                            <td><?= $usuario->getLoginUsuario() ?></td>
                            <td><?= $usuario->getSenha() ?></td>                     
                            
                            <td class="text-center">
                               <button type="button" class="btn btn-warning"  data-bs-toggle="modal" 
                               data-bs-target="#editar<?= $usuario->getIdUsuario() ?>" data-bs-whatever="@mdo">Editar</button>
                                
                                <a href="../controller/UsuarioController.php?del=<?= $usuario->getIdUsuario() ?>">
                                <button class="btn btn-danger" type="button" >Excluir</button>
                                </a>
                            </td>
                        </tr>

                       <!--modal-->
                       
                        <div class="modal fade" id="editar<?= $usuario->getIdUsuario() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" 
                          aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                               <form action="../controller/UsuarioController.php" method="POST">
                                
                                  <div class="row">
                                    <div class="col-md-6">
                                      <label for="nome" class="form-label">Nome </label>
                                      <input type="text" class="form-control" id="nome" name="nome" 
                                        value="<?= $usuario->getNomeUsuario() ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                      <label for="login" class="form-label">Login</label>
                                      <input type="text" class="form-control" id="login" name="login" 
                                        value="<?= $usuario->getLoginUsuario() ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                      <label for="senha" class="form-label">Senha</label>
                                      <input type="text" class="form-control" id="senha" name="senha" 
                                        value="<?= $usuario->getSenha() ?>" required>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-2">
                                    <br>
                                    <input type="hidden" name="id" value="<?= $usuario->getIdUsuario() ?>" />
                                    <button class="btn btn-primary" type="submit" name="editar">Editar</button>
                                     </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div> 

                        
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>




        	
		</section>	

		
	</div>

</body>
</html>