<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $salario = $_POST['salario'];
    //echo"$salario";

    if ($salario <= 300) {
     $reajuste = ($salario * 1.5);
     echo("Seu salário teve um reajuste de 50% e agora é de R$: $reajuste");
    }

    elseif ($salario > 300) {
        $reajuste = ($salario * 1.3);
        echo("Seu salário teve um reajuste de 30% e agora é de R$: $reajuste");
    }
    ?>
</body>
</html>