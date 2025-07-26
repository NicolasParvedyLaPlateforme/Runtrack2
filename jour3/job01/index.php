<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $tableau = [200, 204, 173, 98, 171, 404, 459];

    foreach ($tableau as $value)
    {
        if ($value % 2 == 0)
        {
            echo "$value est pair <br>";
        }else {
            echo "$value est impair <br>";   
        }
    }

    ?>
</body>
</html>