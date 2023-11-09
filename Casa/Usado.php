<?php

require_once "Imovel.php";

class Usado extends Imovel
{
    private $porcentagemDesconto;

    public function __construct($endereco, $preco, $porcentagemDesconto)
    {
        parent::__construct($endereco, $preco);
        $this->setPorcentagemDesconto($porcentagemDesconto);
    }

    public function getPorcentagemDesconto()
    {
        return $this->porcentagemDesconto;
    }

    public function setPorcentagemDesconto($porcentagemDesconto)
    {
        $this->porcentagemDesconto = $porcentagemDesconto;
    }

    public function valor()
    {
        return parent::valor() + ($this->preco * ($this->porcentagemDesconto/100));
    }

}