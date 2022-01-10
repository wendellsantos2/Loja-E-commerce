<?php

class Produto{
    
    public $idProduto;
    public $nomeProduto;
    public $descricao;
    public $valor;
    public $imagem;

    /*métodos set*/
    
    function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

    function setNomeProduto($nomeProduto) {
        $this->nomeProduto = $nomeProduto;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }


    /*métodos get*/


    function getIdProduto() {
        return $this->idProduto;
    }

    function getNomeProduto() {
        return $this->nomeProduto;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getValor() {
        return $this->valor;
    }

    function getImagem() {
        return $this->imagem;
    }

    
}

?>