<?php

class Cliente{
    
    public $idCliente;
    public $nomeCliente;
    public $cpfCliente;
    public $emailCliente;
    public $telefone;
    public $sexo;
    public $senha;
    public $logradouro;
    public $numero;
    public $complemento;
    public $bairro;
    public $cep;
    public $cidade;
    public $uf;

    /*métodos set*/
    
    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNomeCliente($nomeCliente) {
        $this->nomeCliente = $nomeCliente;
    }

    function setCpfCliente($cpfCliente) {
        $this->cpfCliente = $cpfCliente;
    }

    function setEmailCliente($emailCliente) {
        $this->emailCliente = $emailCliente;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    /*métodos get*/


    function getIdCliente() {
        return $this->idCliente;
    }

    function getNomeCliente() {
        return $this->nomeCliente;
    }

    function getCpfCliente() {
        return $this->cpfCliente;
    }

    function getEmailCliente() {
        return $this->emailCliente;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getSenha() {
        return $this->senha;
    }

    function getLogradouro() {
        return $this->logradouro;
    }

    function getNumero() {
        return $this->numero;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCep() {
        return $this->cep;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getUf() {
        return $this->uf;
    }
  
    
}

?>