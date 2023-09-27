<?php

class Aluno
{
    private $nome;
    private $ra;
    private $curso;
    private $disciplina;
    private $p1;
    private $p2;
    
    public function __construct($nome, $ra, $disciplina)
    {
        $this -> setNome($nome);
        $this -> setRa($ra);
        $this -> setDisciplina($disciplina);
    }

    public function getNome()
    {
        return $this -> nome;
    }

    public function setNome($nome)
    {
        $this -> nome = $nome;
    }

    public function getRa()
    {
        return $this -> ra;
    }

    public function setRa($ra)
    {
        $this -> ra = $ra;
    }

    public function getCurso()
    {
        return $this -> curso;
    }

    public function setCurso($curso)
    {
        $this -> curso = $curso;
    }

    public function getDisciplina()
    {
        return $this -> $disciplina;
    }

    public function setDisciplina($disciplina)
    {
        $this -> disciplina = $disciplina;
    }

    public function getP1()
    {
        return $this -> p1;
    }

    public function setP1($p1)
    {
        $this -> p1 = $p1;
    }

    public function getP2()
    {
        return $this -> p2;
    }

    public function setP2($p2)
    {
        $this -> p2 = $p2;
    }

    public function calcularMedia()
    {
        return ($this -> p1 + $this -> p2) / 2;
    }

    public function situacao()
    {
        $media = $this -> calcularMedia();
        if ($media < 5) 
        {
            return "Reprovado";
        }
        else if ($media >= 5 and $media <= 6) 
        {
            return "De exame";
        }
        else
        {
            return "Aprovado";
        }
    }
}

$aluno1 = new Aluno ("Raphael", "123", "POO");
$aluno1 -> setCurso("ADS");
$aluno1 -> setP1(9);
$aluno1 -> setP2(7);

$aluno2 = new Aluno ("Bruno", "222", "POO");
$aluno2 -> setCurso("ADS");
$aluno2 -> setP1(10);
$aluno2 -> setP2(10);

$aluno3 = new Aluno ("Andrew", "001", "POO");
$aluno3 -> setCurso("ADS");
$aluno3 -> setP1(5);
$aluno3 -> setP2(6);

$aluno4 = new Aluno ("Denilson", "666", "POO");
$aluno4 -> setCurso("ADS");
$aluno4 -> setP1(0);
$aluno4 -> setP2(2);

echo "O ALUNO {$aluno1->getNome()} RA {$aluno1->getRa()} do curso {$aluno1->getCurso()} teve uma média de {$aluno1->calcularMedia()} e esta {$aluno1->situacao()}<br>";
echo "O ALUNO {$aluno2->getNome()} RA {$aluno2->getRa()} do curso {$aluno2->getCurso()} teve uma média de {$aluno2->calcularMedia()} e esta {$aluno2->situacao()}<br>";
echo "O ALUNO {$aluno3->getNome()} RA {$aluno3->getRa()} do curso {$aluno3->getCurso()} teve uma média de {$aluno3->calcularMedia()} e esta {$aluno3->situacao()}<br>";
echo "O ALUNO {$aluno4->getNome()} RA {$aluno4->getRa()} do curso {$aluno4->getCurso()} teve uma média de {$aluno4->calcularMedia()} e esta {$aluno4->situacao()}<br>";