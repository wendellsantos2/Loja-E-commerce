
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
      #img
          {
            width:300px;
            height:300px;
          }
          #produto{
            float:left;
            padding:5%;
          }
      </style>

  </head>
  <body>

  <div class="container">
  <?php
        include '../../php/conexao.php';
         session_start();
          $email =  $_SESSION['email'] ;
          $nome =  $_SESSION['nome'];
          $idcli = $_SESSION['id'];
        echo '<a href="sair.php"><button type="button" class="btn btn-danger">Sair</button></a>';
     
?>
        <header>
           <h4>Faça suas compras - <?php echo $nome;?></h4>
            <h3>Selecione o produto</h3>

        </header>
   
         
        <?php
          $produto = mysqli_query($conn,"select distinct idProduto,nomeProduto,descricao,valor, imagem from produto ");

         $linha = $_SESSION['linha'] = $produto;

          while($linha = mysqli_fetch_array($produto)){
            echo '
            <div  id="produto">
            <form action="carrinho.php?idproduto='.$linha['idProduto'].'" method="GET">
             <div class="form-group row">
                <div class="col-sm">
                  <img src="../../imagem/'.$linha['imagem'].'" class="figure-img img-fluid rounded" id="img">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm">
                  <input type="hidden" name="idproduto" class="form-control-plaintext" value="'.$linha['idProduto'].'">
                </div>
              </div>
             <div class="form-group row">
                <div class="col-sm">
                 <input type="text" name="nomeprod" class="form-control-plaintext"  value="'.$linha['nomeProduto'].'"readonly>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm">
                 <input type="text" name="preco" class="form-control-plaintext"  value="'.$linha['valor'].'"readonly>
                </div>
              </div>
             <div class="form-group row">
                <div class="col-sm">
                 <textarea class="form-control" id="descricao" rows="3" class="form-control-plaintext" style="resize: none;" readonly>'.$linha['descricao'].' </textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm">
                 <button type="submit" class="btn btn-primary" name="comprar">Comprar</button>
                </div>
              </div>
            </form>
            </div>'
            ;
          }
          ?>
       
        
  </div>

  
</body>
</html>