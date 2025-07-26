<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $str = "Certaines choses changent, et d'autres ne changeront jamais.";
        $newStr = "";

        $i = 0;

        while (isset($str[$i])){
            if (isset($str[$i+1]))
            {
                $newStr = $newStr . $str[$i+1];
            }else {
                $newStr = $newStr . $str[0];
            }
            $i++;
        }

        echo $newStr;
    ?>
</body>
</html>