<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Projeto Mini Loja Virtual</title>
      <style>
      #img
          {
            width:300px;
            height:300px;
          }
          #comprar{
            margin-top:10px;
          }
      </style>

    <script>
        function calcularTotal(){
            var valor = document.getElementById('valorproduto').value;
            var quant = document.getElementById('quantidade').value;
            var total = valor * quant;
            document.getElementById('total').value = total.toFixed(2);
        }
        function mensagem() {
          alert('Compra Realizada com Sucesso!');
        }

    </script>
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

    <h4>Faça suas compras - <?php echo $nome;?></h4>
    <h3>Clique sobre os produtos para selecionar</h3>
    <div class="row">
    <div class="col-sm-6">
    <?php

    include "../../php/conexao.php";

       $id = $_GET['idproduto'];
       $nomeProduto = $_GET['nomeprod'];
      $preco =$_GET['preco'];

    echo'
        <form action="#" method="POST">

        <input type="hidden" class="form-control"  name="idprod" value="'.$id.'" readonly>
        <input type="hidden" class="form-control"  name="idcli" value="'.$idcli.'" readonly>

        <div class="form-row">

        <label>Produto:</label>
        <input type="text" class="form-control"  name="nomeproduto" value="'.$nomeProduto.'" readonly>
        </div>
        <div class="form-row">
        <label>Preço R$:</label>
        <input type="text" class="form-control"  name="precoProd" id="valorproduto" value="'.$preco.'" readonly>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label>Quantidade: (campo obrigatório)</label>
        <input type="number" class="form-control"  name="quantidade" id="quantidade" onchange="calcularTotal()" required>
        </div>
        <div class="form-group col-md-6">
        <label>Total R$:</label>
        <input type="text" class="form-control"  name="total" id="total" readonly>
        </div>
        </div>

        <div class="form-row">
        <label>Comprador:</label>
        <input type="text" class="form-control"  name="nomecli" value="'.$nome.'" readonly>
        </div>

        <fieldset class="form-group">
        <div class="row">
       <legend class="col-form-label col-sm">Forma de Pagamento</legend>
       <div class="col-sm">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="forma" id="forma" value="Boleto" checked>
          <label class="form-check-label" for="gridRadios1">
           Boleto
          </label>
         </div>
         <div class="form-check">
          <input class="form-check-input" type="radio" name="forma" id="forma" value="Cartão de Crédito">
          <label class="form-check-label" for="gridRadios2">
           Cartão de Crédito
          </label>
          </div>
          </div>
           </div>
          </fieldset>

        <div class="form-row">
        <div class="form-group col-md">
        <button type="submit" name="finalizar" class="btn btn-primary ">Finalizar</button>
        <a href="../../index.php"><button type="button" class="btn btn-danger" >Cancelar</button></a>
        </div>
        </div>
        </form>';

        echo "</div>";

        //inserir os códigos aqui...
        if(isset($_POST['finalizar'])){
          $valor = $_POST['precoProd'];
          $quantidade =$_POST['quantidade'];
          $total =$_POST['total'];
          $forma = $_POST['forma'];
          $idProduto = $_POST['idprod'];          
          $idcliente =$_POST['idcli'];
          

          $inserir = mysqli_query($conn,"insert into compras
            (valor,quantidade,total,formaPagamento,idProduto,idCliente)
              values
            ($valor,$quantidade,$total,'$forma',$idProduto,$idcliente)");


          for($i=1;$i<=1;$i++){

          if(!$inserir){
             echo "erro ao inserir<br>";
            echo "<a href='carrinho.php'>Voltar</a>";
          }else{

            $sql = mysqli_query($conn,"select *  from compras
            inner join produto on compras.idProduto = produto.idProduto
            inner join cliente on compras.idCliente = cliente.idCliente
            where 
            compras.idProduto = $idProduto and compras.idCliente = $idcli");


            while($linha = mysqli_fetch_array($sql)){
              $dataCompra = str_replace('-','/',$linha['dataCompra']);              
             echo
            '
            <div class="col-sm-6">
            <div class="form-row">
            <div class="card" style="width: 36rem;">
              <div class="card-body">
              <h5 class="card-title">Confira suas informações:</h5>
             <label>Produto:</label>
            <input type="text" class="form-control"  name="nomeProd" value="'.$linha['nomeProduto'].'" readonly>
            <label>Quantidade:</label>
            <input type="text" class="form-control"  name="quantidade" value="'.$linha['quantidade'].'" readonly>
            <label>Preço: R$</label>
            <input type="text" class="form-control"  name="precoProd" value="'.$linha['valor'].'" readonly>
            <label>Total a pagar: R$</label>
            <input type="text" class="form-control"  name="total" value="'.$linha['total'].'" readonly>
            <label>Comprador:</label>
            <input type="text" class="form-control"  name="nomeCli" value="'.$linha['nomeCliente'].'" readonly>
            <label>Forma de Pagamento:</label>
            <input type="text" class="form-control"  name="forma" value="'.$linha['formaPagamento'].'" readonly>
            <label>Data da Compra:</label>
            <input type="text" class="form-control"  name="data" value="'.date('d/m/Y', strtotime($dataCompra)).'" readonly>
            <label>CEP:</label>
            <input type="text" class="form-control"  name="cep" value="'.$linha['cep'].'" readonly>
            <label>Rua:</label>
            <input type="text" class="form-control"  name="rua" value="'.$linha['logradouro'].'" readonly>
            <label>Número:</label>
            <input type="text" class="form-control"  name="numero" value="'.$linha['numero'].'" readonly>
            <label>Complemento:</label>
            <input type="text" class="form-control"  name="complemento" value="'.$linha['complemento'].'" readonly>
            <label>Bairro:</label>
            <input type="text" class="form-control"  name="bairro" value="'.$linha['bairro'].'" readonly>
            <label>Cidade:</label>
            <input type="text" class="form-control"  name="cidade" value="'.$linha['cidade'].'" readonly>
            <label>Estado:</label>
            <input type="text" class="form-control"  name="estado" value="'.$linha['uf'].'" readonly>

             <a href="../../index.php"><button type="button" class="btn btn-success" id="comprar" onclick="mensagem()">Comprar</button></a>
              </div>
            </div>
            </div>
            </div>

              ';
          }
        }
        }
        }

    ?>
    </div>
  </div>





    
  </body>
</html>