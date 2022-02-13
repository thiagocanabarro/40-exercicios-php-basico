<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $valor = $_GET["v"];

    if ($valor >= 10) {
        echo"Maior ou igual a 10";
    } else {
        echo"Menor ou igual a 10";
    }

    ?>
</body>
</html>