<?php

class Imovel
{
    private $endereco;
    protected $preco;
    
    public function __construct($endereco, $preco)
    {
        $this->setEndereco($endereco);
        $this->setPreco($preco);
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function valor()
    {
        return $this->preco;
    }
}