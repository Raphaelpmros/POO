<?php

require_once "Empregado.php";

class Gerente extends Empregado
{
    private $departamento;
    private $bonusAnual;

    public function __construct($nome, $salario, $departamento)
    {
        parent::__construct($nome, $salario);
        $this->departamento = $departamento;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }

    public function setBonus($valor)
    {
        $this->bonusAnual = $valor;
    }

    public function salarioAnual()
    {
        return parent::salarioAnual() + $this->bonusAnual;
    }
}