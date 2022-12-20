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
    $a=["name"=>"dheeraj","class"=>"c","rollno"=>5];
    print_r($a);

    $b=[
        ["name"=>"mohan"],
        ["name"=>"rohan"],
        ["name"=>"roha"]
    ];
    foreach($b as $key=>$value)
    {
        echo $key;
        foreach($value as $val)
        {
            echo $val;
        }
    }
    echo "<pre>";
    print_r($b);
    echo "</pre>";
    ?>
    
</body>
</html>