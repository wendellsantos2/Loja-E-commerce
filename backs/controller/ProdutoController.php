<?php
    
    include_once "../conexao/Conexao.php";
    include_once "../model/Produto.php";
    include_once "../dao/ProdutoDao.php";

    //instancia as classes
    $produto = new Produto();
    $produtodao = new ProdutoDao();

    //pega todos os dados passado por POST

    $d = filter_input_array(INPUT_POST);

   

    //se a operação for gravar entra nessa condição
    if(isset($_POST['salvar'])){

        $produto->setNomeProduto($d['nome']);
        $produto->setDescricao($d['descricao']);
        $produto->setValor(str_replace(',', '.', $d['valor']));
        $imagem = $_FILES['imagem'];
        $produto->setImagem($imagem);

        if ( isset( $_FILES['imagem'] ) ) {
            $extensao = strtolower( substr( $_FILES['imagem']['name'], -4 ) );
            $imagem = md5( time() ).$extensao;
            $diretorio = '../../imagem/';

            move_uploaded_file( $_FILES['imagem']['tmp_name'], $diretorio.$imagem );
        }
       
        $produtodao->create($produto); 
       
        header("Location: ../telas/cadproduto.php");
    }
    /*
    else if(isset($_POST['editar'])){

        $produto->setNomeProduto($d['nome']);
        $produto->setDescricao($d['descricao']);
        $produto->setValor(str_replace(',', '.', $d['valor']));
        $imagem = $_FILES['imagem'];
        $produto->setImagem($imagem);

        if ( isset( $_FILES['imagem'] ) ) {
            $extensao = strtolower( substr( $_FILES['imagem']['name'], -4 ) );
            $imagem = md5( time() ).$extensao;
            $diretorio = '../../imagem/';

            move_uploaded_file( $_FILES['imagem']['tmp_name'], $diretorio.$imagem );
        }

        $produtodao->update($produto);

        header("Location: ../telas/cadproduto.php");
    }*/
    // se a requisição for deletar
    else if(isset($_GET['del'])){

        $produto->setIdProduto($_GET['del']);

        $produtodao->delete($produto);

        header("Location: ../telas/cadproduto.php");
    }else{
        header("Location: ../telas/cadproduto.php");
    }
    
?>

