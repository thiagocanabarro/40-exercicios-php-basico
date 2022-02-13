<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    $valor = $_GET['number'];
    $fatorial = 1;

    

    for ($fatorial=1 ; $valor > 1 ; $valor--) {

        $fatorial = $fatorial * $valor;
    }
    
    echo "O fatorial de " . $_GET['number'] . " é $fatorial";
    ?>
</body>
</html>