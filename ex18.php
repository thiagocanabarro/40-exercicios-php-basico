<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_GET['nome'];
    $idade = $_GET['id'];
    $sexo = $_GET['sex'];

    if ($idade < 25 && $sexo === "Feminino") {
        echo("Aceita");
    } else {
        echo ("Não aceita");
    }
    ?>
</body>
</html>