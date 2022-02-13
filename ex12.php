<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $v1 = $_GET['n1'];
    $v2 = $_GET['n2'];

    for ($i = 0; $i < $v1; $i++) {

        echo $v2;

        if($i != $v1) echo " + ";
    }
    ?>
</body>
</html>