<?php

#print("Hello World!")
echo "Hello World!</br>";
echo "<strong>Unimar</strong> ADS 2023</br>";

$idade = 17;

if($idade >= 18) {
    echo "Maior de idade<br>";
} else {
    echo "Menor de idade<br>";
}


$numero = 0;

if ($numero <0) {
    echo "Numero negativo</br>";
} elseif ($numero >  0) {
    echo "Numero positivo</br>";
} else {
    echo "O número é zero <br>";
}     

$i = 0;

while ($i <= 10) {
    echo "{$i}<br>";
    $i++;
} 

for ($i = 10; $i >= 0; $i--) {
    echo "{$i}<br>";
}

$lista = array(0,1,2,3,4 ,5,6,7,8,9,10);

echo "O tamanho do array é " . count($lista) . "</br>";
echo "O tamanho do array é " . sizeof($lista) . "</br>";

for($i = 0; $i < count($lista); $i++) {
    echo "Elemento: {$lista[$i]}</br>";
}



foreach($lista as $e) {
    echo "Usando foreach {$e}</br>";
}

echo "<h3> Aluno array</h3>";

$aluno = array(
    "Nome" => "Raphael",
    "Idade" => "24",
    "Curso" => "ADS",
    "Disciplina" => "POO",
    "IE" => "Unimar",
);



echo "Esse é o aluno: <br>";
foreach ($aluno as $key => $value){
    echo "<strong>{$key}:</strong> {$value} <br>";
};

#var_dump($aluno);
#print_r($aluno);
#<pre> tag HTML para deixar mais chique
echo"<pre>";
echo json_encode($aluno);
echo "</pre>";



// Atividade proposta: Criar lista turma e lista de alunos dentro da lista turma

// Primeiro criaremos a lista dos alunos
$aluno1 = array(
    "Nome" => "Raphael",
    "Idade" => "24",
    "Curso" => "ADS",
    "Disciplina" => "POO",
    "IE" => "UNIMAR",
);

$aluno2 = array(
    "Nome" => "Maria",
    "Idade" => "18",
    "Curso" => "ADS",
    "Disciplina" => "POO",
    "IE" => "UNIMAR",
);

$aluno3 = array(
    "Nome" => "Maycon",
    "Idade" => "22",
    "Curso" => "ADS",
    "Disciplina" => "POO",
    "IE" => "UNIMAR",
);

$aluno4 = array(
    "Nome" => "João",
    "Idade" => "20",
    "Curso" => "ADS",
    "Disciplina" => "POO",
    "IE" => "UNIMAR",
);

$aluno5 = array(
    "Nome" => "Roberta",
    "Idade" => "32",
    "Curso" => "ADS",
    "Disciplina" => "POO",
    "IE" => "UNIMAR",
);

// Aqui criamos as listas de turmas
$turma1 = array($aluno1, $aluno3, $aluno4);

$turma2 = array($aluno2, $aluno5);

// Criamos a lista turmas contendo as duas turmas dentro

$listaTurmas = array(
    "Turma 1" => $turma1, 
    "Turma 2" => $turma2,
);

//Caso quera chamar apenas um aluno de uma turma faremos da seguinte maneira:

echo "Nome do primeiro aluno da Turma 1: " . $listaTurmas["Turma 1"][0]["Nome"];

// Agora chamaremos as listas de turma e os alunos que contem dentro delas

foreach ($listaTurmas as $turmaNome => $alunos) {
    echo "$turmaNome: <br>";
    echo "$turmaNome: <br>";
    foreach ($alunos as $aluno) {
        echo "Nome: " . $aluno["Nome"] . "<br>";
        echo "Idade: " . $aluno["Idade"] . "<br>";
        echo "Curso: " . $aluno["Curso"] . "<br>";
        echo "Disciplina: " . $aluno["Disciplina"] . "<br>";
        echo "IE: " . $aluno["IE"] . "<br>";
        echo "<br>";
    }
    echo "<br>";
}
