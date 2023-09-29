<?php

class Livro{
    private $titulo;
    private $quantidadePaginas;
    private $paginasLidas;

    public function __construct($titulo, $quantidadePaginas, $paginasLidas = 0) {
        $this->setTitulo($titulo);
        $this->setQuantidadePaginas($quantidadePaginas);
        $this->setPaginasLidas($paginasLidas);
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getQuantidadePaginas() {
        return $this->quantidadePaginas;
    }

    public function setQuantidadePaginas($quantidadePaginas) {
        $this->quantidadePaginas = $quantidadePaginas;
    }

    public function getPaginasLidas() {
        return $this->paginasLidas;
    }

    public function setPaginasLidas($paginasLidas) {
        if ($paginasLidas >= 0 && $paginasLidas <= $this->quantidadePaginas) {
            $this->paginasLidas += $paginasLidas; //somando paginas lidas
            if ($this->paginasLidas > $this->quantidadePaginas) { //se ler o livro todo ja vai ter terminado
                $this->paginasLidas = $this->quantidadePaginas;
            }
        } else { //mantem a quantidade de paginas (nao podemos "desler" um livro)
            return false;
        }
    }

    public function verificarProgresso() {
        if ($this->quantidadePaginas == 0) {
            return 0;
        }
        return ($this->paginasLidas / $this->quantidadePaginas) * 100;
    }
}

$livro1 = new Livro("O Senhor dos Anéis", 500);

$livro1->setPaginasLidas(10);
echo "Progresso de leitura do livro {$livro1->getTitulo()}: páginas lidas: {$livro1->getPaginasLidas()}, progresso: {$livro1->verificarProgresso()}%<br>";

$livro1->setPaginasLidas(20);
echo "Progresso de leitura do livro {$livro1->getTitulo()}: páginas lidas: {$livro1->getPaginasLidas()}, progresso: {$livro1->verificarProgresso()}%<br>";

$livro1->setPaginasLidas(100); 
echo "Progresso de leitura do livro {$livro1->getTitulo()}: páginas lidas: {$livro1->getPaginasLidas()}, progresso: {$livro1->verificarProgresso()}%<br>";

$livro1->setPaginasLidas(-15); 
echo "Progresso de leitura do livro {$livro1->getTitulo()}: páginas lidas: {$livro1->getPaginasLidas()}, progresso: {$livro1->verificarProgresso()}%<br>";

$livro1->setPaginasLidas(150);
echo "Progresso de leitura do livro {$livro1->getTitulo()}: páginas lidas: {$livro1->getPaginasLidas()}, progresso: {$livro1->verificarProgresso()}%<br>";
