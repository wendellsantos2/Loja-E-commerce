<?php
	include_once "../conexao/Conexao.php";
	include_once "../dao/ClienteDao.php";
	include_once "../model/Cliente.php";

	//instancia as classes
	$cliente = new Cliente();
	$clientedao = new ClienteDao();
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
    </style>
</head>
<body>
	<?php
		include 'painel.php';
	?>
	<div class="container">
		<section class="formulario">
			    <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>IdCliente</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Sexo</th>
                        <th>CEP</th>
                        <th>Logradouro</th>
                        <th>Número</th>
                        <th>Complemento</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>UF</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientedao->read() as $cliente) : ?>
                        <tr>
                            <td><?= $cliente->getIdCliente() ?></td>
                            <td><?= $cliente->getNomeCliente() ?></td>
                            <td><?= $cliente->getCpfCliente() ?></td>
                            <td><?= $cliente->getEmailCliente() ?></td>
                            <td><?= $cliente->getTelefone() ?></td>
                            <?php if($cliente->getSexo()==0){
                                echo "<td>Masculino</td>";
                            }else{
                                 echo "<td>Feminino</td>";
                            }?>
                            <td><?= $cliente->getCep() ?></td>
                            <td><?= $cliente->getLogradouro() ?></td>
                            <td><?= $cliente->getNumero() ?></td>
                            <td><?= $cliente->getComplemento() ?></td>
                            <td><?= $cliente->getBairro() ?></td>
                            <td><?= $cliente->getCidade() ?></td>
                            <td><?= $cliente->getUf() ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
      </section>	
		
	</div>

</body>
</html>