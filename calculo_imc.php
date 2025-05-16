<?php

function classificarIMC($imc) {
    $faixas = [
        'magreza' => [0, 18.5],
        'saudável' => [18.51, 24.9],
        'sobrepeso' => [25.0, 29.9],
        'obesidade Grau I' => [30.0, 34.9],
        'obesidade Grau II' => [35.0, 39.9],
        'obesidade Grau III' => [40.0, INF]
    ];

    foreach ($faixas as $tipo => $limites) {
        if ($imc >= $limites[0] && $imc <= $limites[1]) {
            return $tipo;
        }
    }

    return 'Classificação não encontrada';
}

echo "Digite seu peso (kg): ";
$peso = (float) trim(fgets(STDIN));

echo "Digite sua altura (m.c): ";
$altura = (float) trim(fgets(STDIN));

$imc = $peso / ($altura * $altura);
$resultado = classificarIMC($imc);


echo PHP_EOL . "Atenção, seu IMC é " . number_format($imc, 2) . ", e você está classificado como $resultado." . PHP_EOL;


