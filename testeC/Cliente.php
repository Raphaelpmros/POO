<?php

class Cliente
{
    private $cliente;
    private $produto;
    private $qtdProduto;

    public function __construct ($cliente, $produto, $qtdProduto)
    {
        $this->setCliente($cliente);
        $this->setProduto($produto);
        $this->setQtdProduto($qtdProduto);
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function setProduto($produto)
    {
        $this->produto = $produto;
    } 

    
    public function getQtdProduto()
    {
        return $this->qtdProduto;
    }


    public function setQtdProduto($qtdProduto)
    {
        $this->qtdProduto = $qtdProduto;
    }
}