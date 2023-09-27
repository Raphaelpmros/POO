<?php

class Cartao
{

    private $banco;
    private $bandeira;
    private $limite;
    private $fatura;

    public function __construct($banco, $bandeira, $limite)
    {
        $this -> setBanco($banco);
        $this -> setBandeira($bandeira);
        $this -> setLimite($limite);
    }

    public function getBanco()
    {
        return $this -> banco;
    }

    public function setBanco($banco)
    {
        $this -> banco = $banco;
    }

    public function getBandeira()
    {
        return $this -> bandeira;
    }

    public function setBandeira($bandeira)
    {
        $this -> bandeira = $bandeira;
    }

    public function getLimite()
    {
        return $this -> limite;
    }

    public function setLimite($limite)
    {
        $this -> limite = $limite;
    }

    public function getFatura() //Não precisamos do "setFatura" pq o valor da fatura vai ser controlado pelo
    {                           //metodo que faremos agora
        return $this -> fatura;
    }

    public function fazerCompra($valorCompra) 
    {
        if ($valorCompra <= ($this -> limite - $this -> fatura))
        {
            $this -> fatura += $valorCompra;
            return true;
        }
        else
        {
            return false;
        }
    }

    public function totalFatura()
    {
        return $this -> fatura;
    }
}

$cartao1 = new Cartao("Banco do Brasil", "Visa", 2000);
$valorCompra1 = 735;

if ($cartao1->fazerCompra($valorCompra1)) //verificando se a função é "true"
{
    echo "A compra de R$ {$valorCompra1} foi aprovada!<br>";
}
else //se não é true, consequentemente é false
{
    echo "A compra de R$ {$valorCompra1} foi negada! Sem limite do cartão<br>";
}

echo "A fatura do cartão {$cartao1->getBandeira()} é de {$cartao1->totalFatura()}<br><br>";

$cartao2 = new Cartao("Santander", "Master Card", 500);
$valorCompra2 = 235.50;
$valorCompra3 = 1232;

if ($cartao2->fazerCompra($valorCompra2))
{
    echo "A compra de R$ {$valorCompra2} foi aprovada!<br>";
}
else
{
    echo "A compra de R$ {$valorCompra2} foi negada! Sem limite do cartão<br>";
}

if ($cartao2->fazerCompra($valorCompra3))
{
    echo "A compra de R$ {$valorCompra3} foi aprovada!<br>";
}
else
{
    echo "A compra de R$ {$valorCompra3} foi negada! Sem limite do cartão<br>";
}

echo "A fatura do cartão {$cartao2->getBandeira()} é de {$cartao2->totalFatura()}<br>";