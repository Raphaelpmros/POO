<?php

/*
Considerar um cenário onde o foco da classe aluno é para realizar uma chamada.
Assim a classe aluno deve ter atríbutos que possam identificar cada aluno e qual cursto e disciplinas o aluno cursa.
Além disso deve ter um atríbuto $presente, que define se o aluno esteve em aula(1) ou faltou(0).

Crie a classe, depois crie 5 instâncias baseadas na classe Aluno.
Coloque as 5 instâncias em um array, seu papel é contar o total de aluno presentes e o total de faltantes.
Depois faça uma listagem na tela mostrando o nome de cada aluno e na frente se esteve em aula ou faltou.
*/

// aqui criaremos a classe aluno com os atributos necessarios dentro que sao os "public"
class Aluno {
    public $nome;
    public $curso;
    public $disciplinas;
    public $presente;
}

// Aqui criamos os alunos de forma individual com os atrubutos separados (se quiser por mais alunos teremos que fazer na mao)
// o "new" é usado aqui para criar novos objetos da classe aluno
$aluno1 = new Aluno();
$aluno1->nome = "Alex";
$aluno1->curso = "ADS";
$aluno1->disciplinas = ["POO", "Desenvolvimento web"];
$aluno1->presente = 1;

$aluno2 = new Aluno();
$aluno2->nome = "Maycon";
$aluno2->curso = "ADS";
$aluno2->disciplinas = ["POO", "Desenvolvimento web"];
$aluno2->presente = 0;

$aluno3 = new Aluno();
$aluno3->nome = "Raphael";
$aluno3->curso = "ADS";
$aluno3->disciplinas = ["POO", "Desenvolvimento web"];
$aluno3->presente = 1;

$aluno4 = new Aluno();
$aluno4->nome = "Vinicius";
$aluno4->curso = "ADS";
$aluno4->disciplinas = ["POO", "Desenvolvimento web"];
$aluno4->presente = 1;

$aluno5 = new Aluno();
$aluno5->nome = "Vitor";
$aluno5->curso = "ADS";
$aluno5->disciplinas = ["POO", "Desenvolvimento web"];
$aluno5->presente = 1;

// aqui colocamos os alunos como um array como faziamos antes
$alunos = [$aluno1, $aluno2, $aluno3, $aluno4, $aluno5];

// criamos as variaveis de quem esta presente e quem faltou
$totalPresentes = 0;
$totalFaltantes = 0;

echo "Lista de presença dos alunos:<br>";

/* criaremos uma condicional onde rodaremos a lista de alunos com o nome como chave e verificaremos 
se ele recebe 1 (presente) ou 0 (falta) e mostramos quais alunos faltaram ou estao presentes */
foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno->nome . " - ";
    if ($aluno->presente == 1) {
        echo "Presente<br>";
        $totalPresentes++;
    } else {
        echo "Faltou<br>";
        $totalFaltantes++;
    }
}

echo "<br>Total de alunos presentes: " . $totalPresentes;
echo "<br>Total de alunos faltantes: " . $totalFaltantes;
