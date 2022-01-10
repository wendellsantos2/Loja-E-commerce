<?php
/*
    Criação da classe Usuario com o CRUD
*/

class ProdutoDAO{
    
    public function create(Produto $produto) {
        try {
            $sql = "INSERT INTO produto (                   
                  nomeProduto,descricao,valor,imagem)
                  VALUES (
                  :nomeProduto,:descricao,:valor,:imagem)";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nomeProduto", $produto->getNomeProduto());
            $p_sql->bindValue(":descricao", $produto->getDescricao());
            $p_sql->bindValue(":valor", $produto->getValor());
            $p_sql->bindValue(":imagem", $produto->getImagem());
           
            
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir Produto <br>" . $e . '<br>';
        }
    }
    

    public function read() {
        try {
            $sql = "SELECT * FROM produto  order by idProduto asc  ";
            $result = Conexao::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->listaProdutos($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }

    private function listaProdutos($linha) {
        $produto = new Produto();
        $produto->setIdProduto($linha['idProduto']);
        $produto->setNomeProduto($linha['nomeProduto']);
        $produto->setDescricao($linha['descricao']);
        $produto->setValor($linha['valor']);
        $produto->setImagem($linha['imagem']);

        return $produto;
    }
    
    public function update(Produto $produto) {
        try {
            $sql = "UPDATE produto set
                  nomeProduto=:nomeProduto,
                  descricao=:descricao,
                  valor=:valor,
                  imagem=:imagem                                       
                  WHERE idProduto = :idProduto";
                  
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nomeProduto", $produto->getNomeProduto());
            $p_sql->bindValue(":descricao", $produto->getDescricao());
            $p_sql->bindValue(":valor", $produto->getValor());
            $p_sql->bindValue(":imagem", $produto->getImagem());
            $p_sql->bindValue(":idProduto", $produto->getIdProduto());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
        }
    }

    public function delete(Produto $produto) {
        try {
            $sql = "DELETE FROM produto WHERE idProduto = :idProduto";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":idProduto", $produto->getIdProduto());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir usuario<br> $e <br>";
        }
    }

 }

 ?>