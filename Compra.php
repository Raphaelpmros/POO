<?php

class Compra
{
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct($nome, $preco, $quantidade)
    {
        $this->setNome($nome);
        $this->setPreco($preco);
        $this->setQuantidade($quantidade);
        echo "<br>Objeto criado<br>";
    }

    public function setNome($nome)
    {
        if (empty($nome))
        {
            $this-> nome = 'Produto';
        }
        else
        {
            $this->nome = $nome;
        }        
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setPreco($preco)
    {
        if ($preco < 0) {
            $this -> preco = 0;
        }
        else
        {
            $this -> preco = $preco;
        }
    }

    public function getPreco()
    {
        return $this -> preco;
    }

    public function setQuantidade($quantidade)
    {
        if ($quantidade < 0)
        {
            $this -> quantidade = 0;
        }
        else
        {
            $this -> quantidade = $quantidade;
        }
    }

    public function getQuantidade()
    {
        return $this -> quantidade;
    }

    public function totalCompra()
    {
        return $this -> preco * $this -> quantidade;
    }

}

$compra1 = new Compra ("Bola", 20, 5);

echo "<br>Seu produto é {$compra1 -> getNome()}<br>";
echo "A quantidade é de {$compra1 -> getQuantidade()}<br>";
echo "O valor total será de {$compra1 -> totalCompra()}<br>";

$compra2 = new Compra ("Tenis", -1, 2);

echo "<br>Seu produto é {$compra2 -> getNome()}<br>";
echo "A quantidade é de {$compra2 -> getQuantidade()}<br>";
echo "O valor total será de {$compra2 -> totalCompra()}<br>";

$compra3 = new Compra ("", 12, 1);

echo "<br>Seu produto é {$compra3 -> getNome()}<br>";
echo "A quantidade é de {$compra3 -> getQuantidade()}<br>";
echo "O valor total será de {$compra3 -> totalCompra()}<br>";