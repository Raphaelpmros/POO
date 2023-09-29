<?php

class Vendedor{
    private $nome;
    private $email;
    private $salarioBase;
    private $porcentagemComissao;
    private $totalVendido;

    public function __construct($nome, $email, $salarioBase, $porcentagemComissao) {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSalarioBase($salarioBase);
        $this->setporcentagemComissao($porcentagemComissao);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getSalarioBase(){
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase){
        $this->salarioBase = $salarioBase;
    }

    public function getPorcentagemComissao(){
        return $this->porcentagemComissao;
    }

    public function setPorcentagemComissao($porcentagemComissao){
        $this->porcentagemComissao = $porcentagemComissao;
    }

    public function getTotalVendido(){
        return $this->totalVendido;
    }

    public function setTotalVendido($totalVendido) {
        $this->totalVendido = $totalVendido;
    }

    public function fazerVenda($valorVenda){
        if ($valorVenda > 0){
            $this->totalVendido += $valorVenda;
            return true;
        } else {
            return false;
        }
    }

    public function salarioTotal() {
        return $this->salarioBase + ($this->totalVendido * ($this->porcentagemComissao / 100));
    }
}

$vendedor1 = new Vendedor("Jorge", "jorge@hotmail.com", 1350.00, 10, 0);
$vendedor1->fazerVenda(1000);

echo "Vendedor: {$vendedor1->getNome()}<br>";
echo "E-mail: {$vendedor1->getEmail()}<br>";
echo "vendas realizadas: {$vendedor1->getTotalVendido()}<br>";
echo "salario total do mês: {$vendedor1->salarioTotal()}<br>";

$vendedor2 = new Vendedor("Marcos", "marc@hotmail.com", 1430.00, 10, 0);
$vendedor2->fazerVenda(-1500);

echo "<br>Vendedor: {$vendedor2->getNome()}<br>";
echo "E-mail: {$vendedor2->getEmail()}<br>";
echo "vendas realizadas: {$vendedor2->getTotalVendido()}<br>";
echo "salario total do mês: {$vendedor2->salarioTotal()}";
