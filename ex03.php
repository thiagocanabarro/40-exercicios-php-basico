<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--     Efetue um algoritmo PHP que receba um valor digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. 
         Imprima na tela: “Valor Positivo”, “Valor Negativo”, “Igual a Zero”-->
    <?php
    $valor = $_GET["v"];
    
    if (is_numeric($valor)) {

    if ($valor > 0) 
        echo("Valor positivo");
      elseif ($valor < 0)
        echo("Valor negativo");
      elseif ($valor == 0) 
        echo("Valor igual a 0");
    
    } else {
    print"O valor informado não é um número";
    }

    
    ?>
</body>
</html>