<?php

class Empregado
{
    private $nome;
    private $sobrenome;
    private $setor;
    private $salarioMensal;

    public function __construct($nome, $sobrenome, $setor, $salarioMensal)
    {
        $this -> setNome($nome);
        $this -> setSobrenome($sobrenome);
        $this -> setSetor($setor);
        $this -> setSalarioMensal($salarioMensal);
    }

    public function getNome()
    {
        return $this -> nome;
    }
    public function setNome($nome)
    {
        $this -> nome = $nome;
    }

    public function getSobrenome()
    {
        return $this -> sobrenome;
    }

    public function setSobrenome($sobrenome)
    {
        $this -> sobrenome = $sobrenome;
    }

    public function getSetor()
    {
        return $this -> setor;
    }

    public function setSetor($setor)
    {
        return $this -> setor = $setor;
    }

    public function getSalarioMensal()
    {
        return $this -> salarioMensal;
    }

    public function setSalarioMensal($valorSalario)
    {
        if ($valorSalario < 0)
        {
            return $this -> salarioMensal = 0;
        }
        else 
        {
            return $this -> salarioMensal = $valorSalario;
        }
    }

    public function salarioAno()
    {
        return $this -> salarioMensal * 12;
    }
}

$empregado1 = new Empregado("Raphael", "Pereira", "Produção", 3000);
$empregado2 = new Empregado("Denilson", "Graci", "Educação", -2500);

echo "O empregado {$empregado1->getNome()} {$empregado1->getSobrenome()} é do setor {$empregado1->getSetor()} e tem um salário anual de R$ {$empregado1->salarioAno()}<br>";
echo "O empregado {$empregado2->getNome()} {$empregado2->getSobrenome()} é do setor {$empregado2->getSetor()} e tem um salário anual de R$ {$empregado2->salarioAno()}<br>";