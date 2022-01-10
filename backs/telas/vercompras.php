
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
        <h3>Consultar Compras</h3>
      </header>
      <div class="formulario">
        <form action="#" method="POST">
        <button type="submit" class="btn btn-primary" name="consultar">Consultar</button>
      </div>
          </form>
          <hr>

      <?php
        if (isset($_POST['consultar'])){
        include "../../php/conexao.php";
  
        $sql = mysqli_query($conn,"select *  from compras
            inner join produto on compras.idProduto = produto.idProduto
            inner join cliente on compras.idCliente = cliente.idCliente");

        echo '<div class="container">
        <h4>Resultado da Busca</h4>
        <table class="table">
        <thead>
        <tr class="table-primary">
        <th scope="col">ID</th>
        <th scope="col">Produto</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Preço</th>
        <th scope="col">Total</th>
        <th scope="col">Cliente</th>
        <th scope="col">Forma de Pagamento</th>
        <th scope="col">Data da Compra</th>
        <th scope="col">Cep</th>
        <th scope="col">Logradouro</th>
        <th scope="col">Número</th>
        <th scope="col">Complemento</th>
        <th scope="col">Bairro</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
        </tr>
        </thead>';
        while( $linha = mysqli_fetch_array( $sql ) ) {
         $dataCompra = str_replace('-','/',$linha['dataCompra']); 
            echo'<tbody>
            <tr>
            <td>'.$linha['idProduto'].'</td>
            <td>'.$linha['nomeProduto'].'</td>
            <td>'.$linha['quantidade'].'</td>
            <td>'.$linha['valor'].'</td>
            <td>'.$linha['total'].'</td>
            <td>'.$linha['nomeCliente'].'</td>
            <td>'.$linha['formaPagamento'].'</td>
            <td>'.date('d/m/Y', strtotime($dataCompra)).'</td>
            <td>'.$linha['cep'].'</td>
            <td>'.$linha['logradouro'].'</td>
            <td>'.$linha['numero'].'</td>
            <td>'.$linha['complemento'].'</td>
            <td>'.$linha['bairro'].'</td>
            <td>'.$linha['cidade'].'</td>
            <td>'.$linha['uf'].'</td>            
            </tr>
          </tbody>';
        }
        echo '</table></div>';
        }
      ?>
    </div>

    </section>
  </div>

</body>
</html>