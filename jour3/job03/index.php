<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $str = "I'm sorry Dave I'm afraid I can't do that";

        $tableauDeVoyelle = ['a', 'e', 'y', 'u', 'i', 'o', 'A', 'E', 'Y', 'U', 'I', 'O\''];

        $i = 0;

        while (isset($str[$i])){
            foreach ($tableauDeVoyelle as $voyelle)
            {
                if ($str[$i] == $voyelle)
                {
                    echo $str[$i] ;
                }
            }

            $i++;
        }
    ?>
</body>
</html>