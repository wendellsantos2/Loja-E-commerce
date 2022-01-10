<?php
include 'conexao.php';

$idproduto = $_GET['idProduto'];

$excluir = mysqli_query( $conn, "delete from produto where idProduto = $idproduto" );

if ( $excluir ) {
    echo "<script>alert('Excluído com sucesso')
          location.href='../backs/telas/consultarProduto.php'</script>";
} else {
    echo "<script>alert('erro ao excluir')
          location.href='../backs/telas/consultarProduto.php'</script>";
}

?>

