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

    <main>
        <?php
        //Entrada de dados passados pelo usuário
        $nome = $_GET["nome"];

        $smn1 = $_GET["smn1"];
        $smn2 = $_GET["smn2"];
        $smn3 = $_GET["smn3"];
        $smn4 = $_GET["smn4"];
        $mensal = $smn1 + $smn2 + $smn3 + $smn4;

        //$mensal = $_GET["mensal"];

        //array para cálculo com FOREACH
        $semanas = array($smn1, $smn2, $smn3, $smn4);

        ///Metas recebida da atividade
        $metaS = 20000; 
        $metaM = 80000;

        //Salário mínimo de acordo com o Piso Regional-PR
        $salarioFinal = 1927.02;

        //Cálculo para saber se as metas da semana foram maior ou igual á 20.000, caso seja, é adicionado 200 no Salário Final.
        foreach($semanas as $s){
            if($s >= $metaS){
                $salarioFinal += 200;
            }
        }

        //Cálculo do excedente semanal 5%
        foreach($semanas as $s){
            if($s > $metaS){
                $salarioFinal += ($s - $metaS) /100 * 5;
            }
        }

        //Cálculo para o excedente mensal
        if($smn1 > $metaS && $smn2 > $metaS && $smn3 > $metaS && $smn4 > $metaS){
            $salarioFinal += ($mensal - $metaM) /100 * 10 ;
        }

        //Mensagem final para o usuário, após todos os cálculos é mostrado ao usuário o valor final do salário
        echo "<h2>$nome seu salárial total é de:</h2>";
        echo "<strong><p>R$".number_format($salarioFinal, 2, ',', '.') . "</p></strong>";

        ?>

        <form id="final" action="index.html">
            <input  type="submit" value="voltar">
        </form>
        
    </main>
    
</body>
</html>