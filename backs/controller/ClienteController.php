<?php

    session_start();

    include_once "../conexao/Conexao.php";
    include_once "../model/Cliente.php";
    include_once "../dao/ClienteDAO.php";

    //instancia as classes
    $cliente = new Cliente();
    $clientedao = new ClienteDAO();

    //pega todos os dados passado por POST

    $d = filter_input_array(INPUT_POST);

    //se a operação for gravar entra nessa condição
    if(isset($_POST['cadastrar'])){

        $cliente->setNomeCliente($d['nome']);
        $cliente->setCpfCliente($d['cpf']);
        $cliente->setEmailCliente($d['email']);
        $cliente->setTelefone($d['telefone']);
        $cliente->setSenha($d['senha']);       
        $cliente->setSexo($d['sexo']);
        $cliente->setCep($d['cep']);
        $cliente->setLogradouro($d['logradouro']);
        $cliente->setNumero($d['numero']);
        $cliente->setComplemento($d['complemento']);
        $cliente->setBairro($d['bairro']);
        $cliente->setCidade($d['cidade']);
        $cliente->setUf($d['uf']);

        $clientedao->cadastrar($cliente); 

        

        echo "<script>
                alert('Cadastro realizado com Sucesso. Você Precisa se logar para comprar')
                location.href='../../index.php'
            </script>";        
              
    } 

        
    
    
?>