<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    

        if($valorA > $valorB) echo ("$valorB , $valorA");
         elseif ($valorB > $valorA) echo ("$valorA , $valorB");
 
    
    ?>
</body>
</html>