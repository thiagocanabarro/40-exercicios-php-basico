<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $mensagem = $_GET['frase'];
    
    $caracteres = strlen($mensagem);

    //echo($caracteres);

    for ($cont = 1 ; $cont <= $caracteres ; $cont++) {
        echo("<br>$cont");

    }

    ?>
</body>
</html>