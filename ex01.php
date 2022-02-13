<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- Efetue um algoritmo PHP que receba um valor digitado pelo usuário e imprima o texto “o valor é maior que 10” caso isso seja verdade, senão imprima 
    “o valor é menor que 10”. -->
    <?php
    $valor = $_GET["v"];
    $r = $valor < 10 ? "Menor que 10":"Maior que 10"; 
    echo($r);
    ?>
</body>
</html>