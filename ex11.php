<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cont = 1;
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    $n1 = $n1 + 1;
    $n2 = $n2 - 2;

    while ($cont <= $n2) {
        echo ("<br>".$n1++);
        $cont++;
    }
    ?>
</body>
</html>