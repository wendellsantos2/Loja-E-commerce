<?php
    
    include_once "../conexao/Conexao.php";
    include_once "../model/Usuario.php";
    include_once "../dao/UsuarioDao.php";

    //instancia as classes
    $usuario = new Usuario();
    $usuariodao = new UsuarioDao();

    //pega todos os dados passado por POST

    $d = filter_input_array(INPUT_POST);
   

    //se a operação for gravar entra nessa condição
    if(isset($_POST['cadastrar'])){

        $usuario->setNomeUsuario($d['nome']);
        $usuario->setLoginUsuario($d['login']);
        $usuario->setSenha($d['senha']);

        $usuariodao->create($usuario);

        header("Location: ../telas/cadusuario.php");
    }

     else if(isset($_POST['editar'])){

        $usuario->setNomeUsuario($d['nome']);
        $usuario->setLoginUsuario($d['login']);
        $usuario->setSenha($d['senha']);
        $usuario->setIdUsuario($d['id']);

        $usuariodao->update($usuario);

        header("Location: ../telas/cadusuario.php");
    }
    // se a requisição for deletar
    else if(isset($_GET['del'])){

        $usuario->setIdUsuario($_GET['del']);

        $usuariodao->delete($usuario);

        header("Location: ../telas/cadusuario.php");
    }else{
        header("Location: ../telas/cadusuario.php");
    }
    
?>

