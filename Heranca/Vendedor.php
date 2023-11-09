<?php

require_once "Empregado.php";

class Vendedor extends Empregado
{
    private $comissaoVendas;

    public function getComissaoVendas()
    {
        return $this->comissaoVendas;
    }

    public function setComissaoVendas($comissaoVendas)
    {
        $this->comissaoVendas = $comissaoVendas;
    }

    public function salarioAnual()
    {
        return parent::salarioAnual() + ($this->comissaoVendas * 12);
    }
}