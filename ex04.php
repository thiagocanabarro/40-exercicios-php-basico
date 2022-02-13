<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--     Resolva um Exercício em PHP que receba os valores A, B, C e D. 
    Efetue a soma entre A e C, a multiplicação entre B e D 
    e verifique se o resultado da soma é maior, menor ou igual ao da multiplicação. 
    Imprima: “A+C é maior que B+D”, “A+C é menor que B+D”, “A+C é igual a B+D”.        -->
    <?php
    $valor1 = $_POST['valorA'];
    $valor2 = $_POST['valorB'];
    $valor3 = $_POST['valorC'];
    $valor4 = $_POST['valorD'];
    
    $sac = ($valor1 + $valor3);
    $mbd = ($valor2 * $valor4);

    echo("$sac,$mbd");
    echo("<br><br>");

    

    if ($sac > $mbd) 
        print"A soma de A + C é maior que a multiplicação de B * D";
        elseif ($mbd > $sac) 
            print"A multiplicação de B * D é maior que a soma de A + C";
        elseif ($sac == $mbd) 
            print"A multiplicação de B * D é igual a soma de A + C";
        
    
            
    ?>
</body>
</html>