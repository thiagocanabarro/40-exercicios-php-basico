<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $v1 = $_GET['v1'];
    $v2 = $_GET['v2'];

    //echo($v1.$v2);
    echo("<br>");

    $soma = ($v1+$v2);
    $soma20 = ($soma+8); 
    $soma5 = ($soma-5);
   
    if ($soma > 20) {
        echo($soma20);
    } 
    elseif ($soma < 20) {
        echo($soma5);
    }

    ?>
</body>
</html>