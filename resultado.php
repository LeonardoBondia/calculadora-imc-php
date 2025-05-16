<?php
$peso = $_POST['peso'] ?? 0;
$altura = $_POST['altura'] ?? 1;

$imc = $peso / ($altura * $altura);

function classificarIMC($imc) {
    if ($imc <= 18.5) return "Magreza";
    elseif ($imc <= 24.9) return "Saudável";
    elseif ($imc <= 29.9) return "Sobrepeso";
    elseif ($imc <= 34.9) return "Obesidade Grau I";
    elseif ($imc <= 39.9) return "Obesidade Grau II";
    else return "Obesidade Grau III";
}

$classificacao = classificarIMC($imc);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Resultado do IMC</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .resultado {
      max-width: 400px;
      margin: 3rem auto;
      background: white;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      text-align: center;
    }

    .resultado strong {
      display: block;
      margin: 1rem 0;
      font-size: 1.3rem;
    }

    a {
      display: inline-block;
      margin-top: 1.5rem;
      color: #4CAF50;
      font-weight: bold;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="resultado">
    <h2>Resultado do IMC</h2>
    <p>Seu IMC é:</p>
    <strong><?= number_format($imc, 2, ',', '.') ?></strong>
    <p>Classificação:</p>
    <strong><?= $classificacao ?></strong>
    <a href="index.html">🔁 Calcular novamente</a>
  </div>
</body>
</html>

