<<?php

function classificarIMC($imc) {
    $faixas = [
        ['limite' => 18.5,  'classificacao' => 'Magreza'],
        ['limite' => 24.9,  'classificacao' => 'Saudável'],
        ['limite' => 29.9,  'classificacao' => 'Sobrepeso'],
        ['limite' => 34.9,  'classificacao' => 'Obesidade Grau I'],
        ['limite' => 39.9,  'classificacao' => 'Obesidade Grau II'],
        ['limite' => INF,   'classificacao' => 'Obesidade Grau III']
    ];

    foreach ($faixas as $faixa) {
        if ($imc <= $faixa['limite']) {
            echo "Atenção, seu IMC é " . number_format($imc, 2) . ", e você está classificado como " . $faixa['classificacao'] . ".";
            return;
        }
    }
}


$imc = null;

if (isset($_POST['imc'])) {
    $imc = floatval($_POST['imc']);
} elseif (isset($_GET['imc'])) {
    $imc = floatval($_GET['imc']);
}

if ($imc !== null) {
    classificarIMC($imc);
} else {
    echo "Informe um valor de IMC via GET (?imc=25.3) ou via POST.";
}

?>

