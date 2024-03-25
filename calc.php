<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sistema de Salário</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>

    <?php
    $nome = $_GET["nome"];

    $semana1 = $_GET["semana1"];
    $semana2 = $_GET["semana2"];
    $semana3 = $_GET["semana3"];
    $semana4 = $_GET["semana4"];

    $mensal = $_GET["mensal"];

    
    $SalarioFinal = 192702 + $metasemanal + $ExSemanal + $ExMensal
    //Salário final = Salário mínimo + valor sobre meta semanal + valor sobre o excedente de meta semanal + valor de excedente de meta mensal.
    ?>
    
</body>
</html>