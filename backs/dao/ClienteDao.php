<?php
/*
    Criação da classe Usuario com o CRUD
*/

class ClienteDAO{

 
    
    public function cadastrar(Cliente $cliente) {
        try {
            $sql = "INSERT INTO cliente (                   
                  nomeCliente,cpfCliente,emailCliente,sexo,telefone,senha,logradouro,numero,complemento,bairro,
                  cep,cidade,uf)
                  VALUES (
                  :nomeCliente,:cpfCliente,:emailCliente,:sexo,:telefone,:senha,:logradouro,:numero,:complemento,:bairro,
                  :cep,:cidade,:uf)";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nomeCliente", $cliente->getNomeCliente());
            $p_sql->bindValue(":cpfCliente", $cliente->getCpfCliente());
            $p_sql->bindValue(":emailCliente", $cliente->getEmailCliente());
            $p_sql->bindValue(":sexo", $cliente->getSexo());
            $p_sql->bindValue(":senha", $cliente->getSenha());
            $p_sql->bindValue(":telefone", $cliente->getTelefone());
            $p_sql->bindValue(":logradouro", $cliente->getLogradouro());
            $p_sql->bindValue(":numero", $cliente->getNumero());
            $p_sql->bindValue(":complemento", $cliente->getComplemento());
            $p_sql->bindValue(":bairro", $cliente->getBairro());
            $p_sql->bindValue(":cep", $cliente->getCep());
            $p_sql->bindValue(":cidade", $cliente->getCidade());
            $p_sql->bindValue(":uf", $cliente->getUf());

                       
            
            
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir Cliente <br>" . $e . '<br>';
        }
    }
  
     public function read() {
        try {
            $sql = "SELECT * FROM cliente  order by idCliente asc  ";
            $result = Conexao::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->listaClientes($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }

    private function listaClientes($linha) {
        $cliente = new Cliente();
        $cliente->setIdCliente($linha['idCliente']);
        $cliente->setNomeCliente($linha['nomeCliente']);
        $cliente->setCpfCliente($linha['cpfCliente']);
        $cliente->setEmailCliente($linha['emailCliente']);
        $cliente->setTelefone($linha['telefone']);
        $cliente->setSexo($linha['sexo']);
        $cliente->setCep($linha['cep']);        
        $cliente->setLogradouro($linha['logradouro']);
        $cliente->setNumero($linha['numero']);
        $cliente->setComplemento($linha['complemento']);
        $cliente->setBairro($linha['bairro']);
        $cliente->setCidade($linha['cidade']);
        $cliente->setUf($linha['uf']);       


        return $cliente;
    }
   
    /*
    function login($nome, $senha) {
        $sql = "SELECT * FROM cliente WHERE emailCliente=:emailCliente AND senha=:senha";
        $result = Conexao::getConexao()->query($sql);
        $stmt = $conexap->prepare($sql);
        $stmt->bindValue(':p_usu_mome', $nome);
        $stmt->bindValue(':p_usu_senha', $senha);
        $stmt->execute();
        $result = $sth->fetch(PDO::FETCH_OBJ);
        return $result->conectado;
    }*/
    
 }

 ?>