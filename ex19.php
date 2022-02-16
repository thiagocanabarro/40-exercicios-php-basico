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
    $v3 = $_GET['v3'];

    //echo($v1.$v2.$v3);
    
    if	   ($v1 > $v2 && $v2 > $v3) echo "$v1 $v2 $v3";
		
    elseif ($v3 > $v2 && $v2 > $v1) echo "$v3 $v2 $v1";
    elseif ($v2 > $v1 && $v1 > $v3) echo "$v2 $v1 $v3";    
    elseif ($v2 > $v1 && $v1 < $v3) echo "$v2 $v3 $v1";  
    elseif ($v1 > $v3 && $v3 > $v2) echo "$v1 $v3 $v2";  
    elseif ($v3 > $v1 && $v1 > $v2) echo "$v3 $v1 $v2 ";  
  
    ?>
</body>
</html>