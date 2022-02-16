<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $msg1 = $_GET['str1'];
        $msg2 = $_GET['str2'];

       // echo($msg1.$msg2);

        if ($msg1 === $msg2) {
            echo("as mensagem escritas são iguais");
        } else {
            echo("as mensagem inseridas são diferentes");
        }
    ?>
</body>
</html>