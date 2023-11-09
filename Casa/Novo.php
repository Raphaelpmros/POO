<?php

require_once "Imovel.php";

class Novo extends Imovel
{
    private $porcentagemAdicional;
    public function __construct($endereco, $preco, $porcentagemAdicional)
    {
        parent::__construct($endereco, $preco);
        $this->setPorcentagemAdicional($porcentagemAdicional);
    }

    public function getPorcentagemAdicional()
    {
        return $this->porcentagemAdicional;
    }

    public function setPorcentagemAdicional($porcentagemAdicional)
    {
        $this->porcentagemAdicional = $porcentagemAdicional;
    }

    public function valor()
    {
        return parent::valor() + ($this->preco*($this->porcentagemAdicional/100));
    }
}