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

    $smn1 = $_GET["smn1"];
    $smn2 = $_GET["smn2"];
    $smn3 = $_GET["smn3"];
    $smn4 = $_GET["smn4"];

    $mensal = $_GET["mensal"];

    $metaS = 20000; 

    $metaM = 80000;

    $salarioFinal = 1927.02;
    


    if($smn1 >= $metaS && $smn2 >= $metaS && $smn3 >= $metaS && $smn4 >= $metaS){
        $salarioFinal += 200;
        //echo $salarioFinal;
    }
    //if($smn1 > $metaS || $smn2 > $metaS || $smn3 > $metaS || $smn4 > $metaS)

    $total = $smn1 + $smn2 + $smn3 + $smn4 
    if($metaM > $total){
        $salarioFinal + 
        //echo $salarioFinal;
    }

    
    //$SalarioFinal = 192702 + $metasemanal + $ExSemanal + $ExMensal;
    //Salário final = Salário mínimo + valor sobre meta semanal + valor sobre o excedente de meta semanal + valor de excedente de meta mensal.
    ?>
    
</body>
</html>