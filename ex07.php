<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $genero = $_POST['genero'];
    //echo"<br><br>$sexo";

    $altura = $_POST['altura'];
    //echo"<br><br>$altura";

    $peso = $_POST['peso'];
   //echo"<br><br>$peso";

   $calcula = 0.0;
   

    

   if  ($genero == "masculino") {
       $calcula = (72.7 * $altura) - 58;

       echo "seu IMC é $calcula";
   }

   elseif ($genero == "feminino") {
        $calcula = (62.1 * $altura) - 44.7;
        
        echo "seu IMC é $calcula";
   }
    ?>
</body>
</html>