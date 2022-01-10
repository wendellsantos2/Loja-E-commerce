
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Projeto Objeto</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <style>
      table th{
        text-align: center;
      }
      table td{
        text-align: center;
      }
      img.imagem{
        width: 100px;
        height: 70px;
      }
      
    </style>
</head>
<body>
  <?php
    include 'painel.php';
  ?>
  <div class="container">
    <section>
      <header>
        <h3>Editar Produtos</h3>
      </header>
      <div class="formulario">

        <?php
           $produto = $_GET["idProduto"];
           $consulta = mysqli_query($conn,"select * from produto where idProduto = $produto");
           $linha = mysqli_fetch_array($consulta);
           if($linha){

          echo'
                <div class="row">
                  <div class="col-sm">
                    <form action="#" method="POST">
                     <div class="form-group">                      
                        <input type="hidden" class="form-control" id="exampleFormControlInput1"
                          placeholder="nome do produto"  name="idproduto" value="'.$linha['idProduto'].'" />
                      </div>
                      <div class="form-group">
                        <label>Produto</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"                    placeholder="nome do produto"  name="nome" value="'.$linha['nomeProduto'].'"/>
                      </div>
                      <div class="form-group">
                        <label>Valor</label>
                        <input type="text" class="form-control"  id="exampleFormControlInput1"                      
                          placeholder="digite o preço"  name="valor" value="'.str_replace('.',',',$linha['valor']).'"/>
                      </div>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <label>Descrição:</label>
                        </div>
                        <textarea class="form-control" aria-label="With textarea" name="descricao" >'.$linha['descricao'].'</textarea>
                      </div>

                      <div class="form-group">
                      <label for="conteudo">Imagem Atual:</label>
                        <img src="../../imagem/'.$linha['imagem'].'"/>
                      </div>
                      <div class="form-group">
                      <label for="conteudo">A imagem não pode ser alterada. Para alterar a imagem, você deve excluir e cadastrar novamente o produto</label>
                       </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="editar">Editar</button>
                      </div>
                    </form>
                  </div>
          </div>';
          }
          else{
            echo "<script>alert('Dados não encontrados')
            location.href='consultarproduto.php'</script>";
          }
          ?>   
      
    </div>

    </section>
  </div>

  <?php
    include "../../php/conexao.php";
    if(isset($_POST['editar'])){

    $id = $_POST['idproduto'];
    $nome = strtoupper( $_POST['nome'] );
    $valor = str_replace( ',', '.', $_POST['valor'] );
    $descricao = strtoupper( $_POST['descricao'] );


    $editar = mysqli_query( $conn, "update produto set nomeProduto='$nome',valor='$valor',descricao ='$descricao' where idProduto='$id' " );

    if ( $editar ) {
      echo"<script>alert('Alterado')
        location.href='consultarProduto.php'</script>";
    } else {
      echo"<script>alert('Erro ao Alterar')
      location.href='consultarProduto.php'</script>";
    }
  }
  ?>

</body>
</html>