

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
	<?php
		include 'painel.php';
	
		include '../../php/conexao.php';



		echo "<div class='container'>";

		echo '<h1>Excluir Produtos</h1>';

		$idproduto = $_GET['idProduto'];

		echo 'Excluir o Produto de código'.$idproduto.'<br>';

		echo "<a href='../../php/deletar.php?idProduto=".$idproduto."'>Sim</a>";
		echo "<a href='consultarProduto.php'>Não</a>";

		echo '</div>'
	?>

</body>
</html>





