<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=4, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $b=100; //global variable
    function hello()
        
    {
        global $b;
        echo $b;
        echo "<br>";
        $a=10; //local variable
        echo $a;  
    }
    echo hello();
   
    echo $a;
    echo $b;

    ?>
    
</body>
</html>