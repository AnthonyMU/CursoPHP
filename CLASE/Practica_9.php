<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    mt_srand(20);
 
    $count=0;
 
    while($count<20) {

        echo mt_rand(-20, 20)." ";
        
         $count++;

    if($count<=0){

        echo "Este numero es negativo";

    }else

        echo "Este numero es negativo";

}

?>



    
</body>
</html>