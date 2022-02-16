<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $valor = $_GET['valor']; 
    $rest10 = ($valor % 10);
    $rest5 = ($valor % 5);
    $rest2 = ($valor % 2);
    //echo $valor 
    //echo($rest);

     if ($rest10 == 0) 
        echo("<br>É divisivel por 10");
     if ($rest5 == 0) 
        echo ("<br>É divisivel por 5");
     if ($rest2 == 0) 
        echo ("<br>É divisivel por 2");
        
    else 
        echo ("<br>O número inserido não é divisivel por 10,5,2");
    
    ?>
</body>
</html>