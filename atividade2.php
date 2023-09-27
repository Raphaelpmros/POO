<?php

function calcularCustosSalas($totalAlunos) {
    
    // Valores fixos do enunciado
    $custoPorComputador = 3000;
    $custoPorMesa = 500;
    $alunosPorTurma = 50;
    $colunasPorSala = 5;
    $fileirasPorSala = 10;

    $custoTotal = 0;
    $salas = 0;
    $turmasArray = array();

    while ($totalAlunos > 0) {
        // ver quantas turmas vão ser necessárias
        $turmas = ceil($totalAlunos / $alunosPorTurma);

        // aqui veremos o valor por turma (custo individual de cada turma)
        for ($i = 0; $i < $turmas; $i++) {
            $alunosTurma = min($alunosPorTurma, $totalAlunos); // quantidade de alunos que teremos na sala
            $mesas = ceil($alunosNaTurma / 2); //cabe 2 alunos por mesa
            $salas = ceil($mesasNaTurma / ($colunasPorSala * $fileirasPorSala));
            $custoTurma = ($alunosNaTurma * $custoPorComputador) + ($mesasNaTurma * $custoPorMesa);

            // Atualizar variáveis de custo geral
            $custoTotal += $custoTurma;
            $salas += $salasNaTurma;

            // Armazenar informações da turma em um array
            $turmaArray = array(
                "alunos" => $alunosNaTurma,
                "computadores" => $alunosNaTurma,
                "mesas" => $mesasNaTurma,
                "custo" => $custoTurma,
            );

            // Adicionar informações da turma ao array de turmas
            $turmasArray[] = $turmaArray;

            // Atualizar o total de alunos restantes
            $totalAlunos -= $alunosNaTurma;
        }
    }

    // Criar o array de retorno
    $retorno = array(
        "custoTotal" => $custoTotal,
        "salas" => $salas,
        "turmas" => $turmasArray,
    );

    return $retorno;
}

// Exemplo de uso
$totalAlunos = 90;
$resultado = calcularCustosSalas($totalAlunos);
print_r($resultado);

?>

